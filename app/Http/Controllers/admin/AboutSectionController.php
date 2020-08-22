<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $AboutSection = AboutSection::find(1);

        return view('cpanel.abousection', compact('AboutSection'));
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

        $AboutSection = AboutSection::find(1);

        if (isset($request->addess1_en)) {
            $AboutSection->addess1_en = strip_tags($request->addess1_en);

        }


        if (isset($request->addess1_ge)) {
            $AboutSection->addess1_ge = strip_tags($request->addess1_ge);

        }

        if (isset($request->content_en)) {
            $AboutSection->content_en = strip_tags($request->content_en);
        }
        if (isset($request->content_ge)) {
            $AboutSection->content_ge = strip_tags($request->content_ge);
        }


        if (isset($request->image1)) {
            $ext = pathinfo($request->image1->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image1->move('uploads', $new_au);
                $AboutSection->image1 = $new_au;

            }
        }


        if (isset($request->image2)) {
            $ext = pathinfo($request->image2->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image2->move('uploads', $new_au);
                $AboutSection->image2 = $new_au;

            }
        }


        if (isset($request->image3)) {
            $ext = pathinfo($request->image3->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image3->move('uploads', $new_au);
                $AboutSection->image3 = $new_au;

            }
        }


        if (isset($request->image4)) {
            $ext = pathinfo($request->image4->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image4->move('uploads', $new_au);
                $AboutSection->image4 = $new_au;

            }
        }


        if (isset($request->image5)) {
            $ext = pathinfo($request->image5->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                $new_au = uniqid() . "." . $ext;


                $path = $request->image5->move('uploads', $new_au);
                $AboutSection->image5 = $new_au;
            }
        }


        $AboutSection->update();


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
