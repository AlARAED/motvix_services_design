<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\cheldpage;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cpanel.createpage');
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


        $Pages = new Pages();
        $Pages->title_en = $request->title_en;
        $Pages->title_ge = $request->title_ge;
        $Pages->url_category = \Illuminate\Support\Str::words($request->title_en, 1);


        $Pages->content_en = $request->content_en;
        $Pages->content_ge = $request->content_ge;
        $Pages->publish = $request->publish;
        $Pages->position = $request->position;
        $Pages->save();
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
        $Pages = Pages::all();

        return view('cpanel.allmainpage', compact('Pages'));
    }

    public function showedit($id)
    {


        $Pages = Pages::find($id);
        return view('cpanel.ediemainpage', compact('Pages'));
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


        $Pages = Pages::find($id);
        $Pages->title_en = $request->title_en;
        $Pages->title_ge = $request->title_ge;

        $Pages->content_en = $request->content_en;
        $Pages->content_ge = $request->content_ge;
        $Pages->publish = $request->publish;
        $Pages->position = $request->position;
        $Pages->update();
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
        $Pages = Pages::find($id);
        $Pages->delete();
        $Pas = cheldpage::where('page_id', $id)->delete();

        $notification = array('message' => 'The data has been removed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
