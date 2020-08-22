<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Slider = Slider::find(1);

        return view('cpanel.slide', compact('Slider'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {

        $Slider = Slider::find(1);


        $Slider->addess1_en = strip_tags($request->addess1_en);
        $Slider->addess1_ge = strip_tags($request->addess1_ge);
        $Slider->addess2_en = strip_tags($request->addess2_en);
        $Slider->addess2_ge = strip_tags($request->addess2_ge);
        $Slider->addess3_en = strip_tags($request->addess3_en);
        $Slider->addess3_ge = strip_tags($request->addess3_ge);

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
                $Slider->image = $new_au;

            }

        $Slider->update();


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
        //
    }
}
