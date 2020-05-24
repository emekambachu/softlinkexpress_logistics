<?php

namespace App\Http\Controllers;

use App\ShipmentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ShipmentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function submitCheckpoint(Request $request, $id){

        $input = $request->all();

        $input['shipment_id'] = $id;

        $shipmentHistory = ShipmentHistory::create($input);

        $data = [
            'name' => $shipmentHistory->shipment->user->name,
            'email' => $shipmentHistory->shipment->user->email,
            'tracking_id' => $shipmentHistory->shipment->tracking_id,
            'location' => $shipmentHistory->location,
            'status' => $shipmentHistory->location,
        ];

        Mail::send('emails.new-checkpoint', $data, static function ($message) use ($data) {
            $message->from('info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->to($data['email'], $data['name']);
            $message->replyTo('Info@cargobaselogistics.com', 'Cargo Base Logistics');
            $message->subject('Shipment checkpoint at'.$data['location']);
        });

        Session::flash('cuccess', 'Checkpoint has been added');
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\ShipmentHistory  $shipmentHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ShipmentHistory $shipmentHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShipmentHistory  $shipmentHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipmentHistory $shipmentHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShipmentHistory  $shipmentHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipmentHistory $shipmentHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShipmentHistory  $shipmentHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipmentHistory $shipmentHistory)
    {
        //
    }
}
