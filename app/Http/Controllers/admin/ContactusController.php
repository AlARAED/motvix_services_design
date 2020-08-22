<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conactus;
use App\Models\setting;
use App\Models\Admin;
use Notification;
use App\Notifications\contactNotification;
use RealRashid\SweetAlert\Facades\Alert;


class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Conactus = Conactus::all();

        return view('cpanel.contact', compact('Conactus'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'name' => 'required',

            'email' => 'required|email',

            'message' => 'required'

        ]);
        $Conactus = new Conactus();
        $Conactus->name = $request->name;
        $Conactus->email = $request->email;
        $Conactus->message = $request->message;

        $Conactus->save();

        Admin::find(1)->notify(new contactNotification($Conactus));


        // $notification = array('message' => 'The data has been inserted successfully','alert_type'=>'success' );  

        //Alert::success('نجاح العمية', '  تم التعديل بنجاح '); 
        # return redirect()->back();
        if ($Conactus) {
            $arr = array('message' => 'م التعديل بنجاح ', 'status' => 200);
        } else {
            $arr = array('message' => 'لم يتم ارسال الرسالة', 'status' => 403);
        }

        return $arr;


        // return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


        $setting = setting::find(1);

        return view('donecontact', compact('setting'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Conactus = Conactus::find($id);
        $Conactus->delete();
        $notification = array('message' => 'The data has been removed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
