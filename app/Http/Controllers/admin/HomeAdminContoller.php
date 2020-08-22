<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use App\User;

use App\Models\Admin;
use App\Models\setting;
use App\Models\Conactus;
use Session;
use DB;
use Hash;

class HomeAdminContoller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin')->except('ShowformLogin', 'adminLogin');
    }


    public function index()
    {


        $Conactus = Conactus::all()->count();
        return view('cpanel.home', compact('Conactus'));

    }


    public function ShowformLogin()
    {
        return view('cpanel.login');
    }


    public function adminLogin(Request $request)
    {

        $Conactus = Conactus::all()->count();
        Session::put('Conactus', $Conactus);
        $name = DB::table('settings')->value('name');
        $image = DB::table('settings')->value('image');
        Session::put('name', $name);
        Session::put('image', $image);


        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|min:6'
        ]);


        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('admin/index');
        }
        return back()->withInput($request->only('name', 'remember'));
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->guest(route('admin.login'));
    }


    public function MyProfile()
    {

        $admin = Admin::find(1);

        return view('cpanel.myprofile', compact('admin'));


    }


    public function Changesettingadmin(Request $request)
    {


        $admin = Admin::find(1);
        //     $encrypted = Crypt::encryptString('Hello world.');
        // return $decrypted = Crypt::decryptString($encrypted);


        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->Mobile_no = $request->Mobile_no;
        $admin->occupaion = $request->occupaion;
        $admin->about = strip_tags($request->about);
        $admin->update();

        $notification = array('message' => 'The data has been changed successfully', 'alert_type' => 'success');


        return redirect()->back()->with($notification);


    }


    public function Changesettingadminimage(Request $request)
    {


        $admin = Admin::find(1);

        if (isset($request->image)) {
            $ext = pathinfo($request->image->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image->move('uploads', $new_au);
            }
        }

        if (isset($new_au))
            if ($new_au != '' or $new_au != null) {
                $admin->image = $new_au;

            }
        $admin->update();

        $notification = array('message' => 'your image has been changed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);


    }


    public function Changesettingadminpass(Request $request)
    {


        $admin = Admin::find(1);
        $admin->password = Hash::make($request->password);
        $admin->update();
        $notification = array('message' => 'your password has been changed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);


    }

    public function WebsiteSettings()
    {

        $setting = setting::find(1);

        return view('cpanel.WebsiteSettings', compact('setting'));


    }


    public function Changesettingwebs(Request $request)
    {


        $admin = setting::find(1);
        //     $encrypted = Crypt::encryptString('Hello world.');
        // return $decrypted = Crypt::decryptString($encrypted);


        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->Mobile_no = $request->Mobile_no;
        $admin->shortdesc_en = $request->shortdesc_en;
        $admin->shortdesc_ge = $request->shortdesc_ge;

        $admin->clients = $request->clients;
        $admin->fb = $request->fb;
        $admin->twitter = $request->twitter;
        $admin->instegram = $request->instegram;
        $admin->lin = $request->lin;
        $admin->about_en = strip_tags($request->about_en);
        $admin->about_ge = strip_tags($request->about_ge);

        $admin->update();
        $notification = array('message' => 'The data has been changed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);


    }


    public function Changesettingaweblogo(Request $request)
    {


        $setting = setting::find(1);

        if (isset($request->image)) {
            $ext = pathinfo($request->image->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image->move('uploads', $new_au);
            }
        }

        if (isset($new_au))
            if ($new_au != '' or $new_au != null) {
                $setting->image = $new_au;

            }
        $setting->update();

        $notification = array('message' => 'logo has been changed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);


    }


    public function makasread()
    {


        foreach (\auth()->user()->unreadNotifications as $notification) {
            $notification->markAsRead();
        }

        $not = \auth()->user()->Notifications;

        return redirect()->back();
    }
}
