<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\cheldpage;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pages = Pages::all();
        return view('cpanel.createsubmenu', compact('Pages'));


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
        $Pages = new cheldpage();
        $Pages->title_en = $request->title_en;
        $Pages->title_ge = $request->title_ge;
        $Pages->url_category = \Illuminate\Support\Str::words($request->title_en, 1);

        $Pages->content_en = $request->content_en;
        $Pages->content_ge = $request->content_ge;
        $Pages->publish = $request->publish;
        $Pages->page_id = $request->page_id;
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
        $Pages = cheldpage::all();

        return view('cpanel.Allsubmenue', compact('Pages'));
    }


    public function showedit($id)
    {

        $mainPage = Pages::all();
        $Pages = cheldpage::find($id);
        return view('cpanel.ediesubmainpage', compact('Pages', 'mainPage'));
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
        $Pages = cheldpage::find($id);
        $Pages->title_en = $request->title_en;
        $Pages->title_ge = $request->title_ge;
        $Pages->content_en = $request->content_en;
        $Pages->content_ge = $request->content_ge;
        $Pages->publish = $request->publish;
        $Pages->page_id = $request->page_id;
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
        $Pages = cheldpage::find($id);
        $Pages->delete();
        $notification = array('message' => 'The data has been removed successfully', 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
