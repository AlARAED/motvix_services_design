<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\setting;
use App\Models\Slider;
use App\Models\Service;
use App\Models\AboutSection;
use App\Models\Refrence;
use App\Models\brands;
use App\Models\Features;

use App\Models\Pages;


class RefrenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Refrence = Refrence::all();

        $Category = Category::all();
        return view('cpanel.refrence', compact('Refrence', 'Category'));
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


        $Refrence = new Refrence();
        $Refrence->name_en = $request->name_en;
        $Refrence->name_ge = $request->name_ge;
        $Refrence->link = $request->link;
        $Refrence->category_id = $request->category_id;
        $Refrence->frame_tab = $request->frame_tab;
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
                $Refrence->image = $new_au;

            }
        $Refrence->save();
        $notification = array('message' => 'The data has been insered successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
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
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();
        $brands = brands::all();
        $Features = Features::all();

        $refrences = Refrence::all();

        return view('refrences', compact('setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));


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


        $Refrence = Refrence::find($id);
        $Refrence->name_en = $request->name_en;
        $Refrence->name_ge = $request->name_ge;
        $Refrence->link = $request->link;
        $Refrence->category_id = $request->category_id;
        $Refrence->frame_tab = $request->frame_tab;
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
                $Refrence->image = $new_au;

            }
        $Refrence->update();
        $notification = array('message' => 'The data has been changed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Refrence = Refrence::find($id);
        $Refrence->delete();
        $notification = array('message' => 'The data has been removed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
