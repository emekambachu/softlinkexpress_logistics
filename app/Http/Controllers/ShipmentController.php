<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\Shipment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shipments = Shipment::paginate(15);
        return view('controlpanel.shipments.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //Check if user details is already stored
        $checkUser = User::where([
            ['email', '=', $input['email']],
        ])->first();

        // if user exists, assign $user to existing user, else create user and assign $user to created user
        if($checkUser){
            $user = $checkUser;
        }else{
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email']
            ]);
        }

        // Get parcel from parcel number
        $getParcel = Parcel::where('parcel_number', $input['parcel_number'])->get()->first();

        // Check if parcel exists
        if(!$getParcel){
            //flash notification
            Session::flash('warning', $input['parcel_number'].' Does not exist');
            return redirect()->back();
        }

        // Check if user already submitted
        $checkParcel = Shipment::where([
            ['user_id', '=', $user->id],
            ['parcel_id', '=', $getParcel->id],
            ['is_active', '=', false]
        ])->first();

        if($checkParcel){
            //flash notification
            Session::flash('warning', $input['parcel_number'].' has already been submitted, wait till it has been shipped');
            return redirect()->back();
        }

        //Generate Tracking Number
        function TrackingId($length = 6){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'CBLOG-TRACK';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $shipment = Shipment::create([
            'parcel_id' => $getParcel->id,
            'user_id' => $user->id,
            'tracking_id' => TrackingId()
        ]);

        //Add all values to data array
        $data = [
            'parcel' => $getParcel->name,
            'email' => $user->email,
            'name' => $user->name,
            'tracking_id' => TrackingId(),
        ];

        //send email to user
        Mail::send('emails.new-tracking', $data, static function($message) use ($data){
            $message->from('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->to($data['email'], $data['name'])->cc('info@cargobaselogistics.com');
            $message->replyTo('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->subject('Request for Tracking Submitted Submitted');
        });

        //send email to Admin
        Mail::send('emails.new-tracking-admin', $data, static function($message) use ($data){
            $message->from('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->to($data['email'], $data['name'])->cc('info@cargobaselogistics.com');
            $message->replyTo('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->subject($data['name'].' Just Initiated his shipment, go to control panel');
        });

        //flash notification
        Session::flash('success', 'Your Tracking ID Request has been sent, you will be notified once approved');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('controlpanel.shipments.edit', compact('shipment' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);

        $shipment->update($request->all());

        //session notification
        Session::flash('success', 'Updated');

        return redirect()->back();
    }

    public function activateShipment(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);

        if($shipment->is_active){

            $shipment->is_active = false;
            $email_subject = 'Your Shipment has been Deactivated';
            Session::flash('warning', 'Your Shipment has been deactivated');

            //session notification
            Session::flash('warning', $email_subject);
        }else{

            $shipment->is_active = true;
            $email_subject = 'Your Shipment has been Activated';
            Session::flash('warning', 'Your Shipment has been Activated');

            //session notification
            Session::flash('success', $email_subject);
        }

        $shipment->save();

        $data = [
            'name' => $shipment->user->name,
            'email' => $shipment->user->email,
            'tracking_id' => $shipment->tracking_id,
            'status' => $shipment->is_active,
            'email_subject' => $email_subject,
        ];

        Mail::send('emails.verify-shipment', $data, static function ($message) use ($data) {
            $message->from('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->to($data['email'], $data['name']);
            $message->replyTo('Info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->subject($data['email_subject']);
        });

        return redirect()->back();
    }

    public function trackShipment(Request $request){

        $tracking_id = $request->input('tracking_id');

        // Check Tracking Status
        $checkTrackingStatus = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->first();

        $validateTrackingId = Shipment::where([
            ['tracking_id', '=', $tracking_id]
        ])->first();

        // Check tracking Status
        if(!$checkTrackingStatus){
            Session::flash('warning', 'Your Shipment has not been activated');
            return redirect()->back();
        }

        // Check tracking Id Validity
        if(!$validateTrackingId){
            Session::flash('warning', 'Your Shipment ID does not exist');
            return redirect()->back();
        }

        return redirect('shipment-routes/'.$checkTrackingStatus->tracking_id);
    }

    public function shipmentRoutes($tracking_id){
        $shipment = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->get()->first();

        return view('shipment-routes', compact('shipment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //find Category and delete
        Shipment::findOrFail($id)->delete();

        //flash notification
        Session::flash('warning', 'Deleted');

        return redirect()->back();
    }
}
