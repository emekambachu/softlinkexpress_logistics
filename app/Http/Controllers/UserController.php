<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('controlpanel.users.index', compact('users'));
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
        $input = $request->all();

        //Check if user details is already stored
        $checkUser = User::where([
            ['email', '=', $input['email']],
        ])->first();

        if($checkUser){
            //flash notification
            Session::flash('warning',  $input['email'].' already has an account with us');
            return redirect()->back()->withInput();
        }

        $user = User::create($input);

        //Add all values to data array
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'mobile' => $user->mobile,
            'country' => $user->country,
            'state' => $user->state,
            'address' => $user->address,
        ];

        //send email to user
        Mail::send('emails.new-tracking', $data, static function($message) use ($data){
            $message->from('info@softlinkexpress.com', 'Softlink Express Delivery');
            $message->to($data['email'], $data['name']);
            $message->replyTo('info@softlinkexpress.com', 'Softlink Express Delivery');
            $message->subject('Registration Complete');
        });

        //send email to Admin
        Mail::send('emails.new-tracking-admin', $data, static function($message) use ($data){
            $message->from('info@softlinkexpress.com', 'Softlink Express Delivery');
            $message->to('info@softlinkexpress.com');
            $message->replyTo('info@softlinkexpress.com', 'Softlink Express Delivery');
            $message->subject($data['name'].' Just Signed up to Softlink Express');
        });

        //flash notification
        Session::flash('success', 'Your Tracking ID Request has been sent, you will be notified once approved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //find item with ID
        $user = User::findOrFail($id);

        //Delete item
        $user->delete();

        //flash notification
        Session::flash('danger', 'Deleted');

        return redirect()->back();
    }
}