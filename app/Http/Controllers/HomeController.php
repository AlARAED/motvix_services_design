<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\Slider;
use App\Models\Service;
use App\Models\AboutSection;
use App\Models\Category;
use App\Models\Refrence;
use App\Models\brands;
use App\Models\Features;

use App\Models\Pages;

use App\Models\cheldpage;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth:admin')->except('ShowformLogin', 'adminLogin', 'indexsi', 'singel_page', 'aboutpage', 'brandspage', 'contactus', 'privacy');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexsi()
    {
        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();

        $refrences = Refrence::OrderBy('id', 'desc')->get();
        $brands = brands::all();
        $Features = Features::all();


        return view('homesie', compact('setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));

    }


    public function singel_page($url_category)
    {

        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();
        $refrences = Refrence::all();
        $brands = brands::all();
        $Features = Features::all();


        $page = Pages::where('url_category', $url_category)->first();


        return view('singel_page', compact('page', 'setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));
    }


    public function singel_pagech($url_category)
    {

        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();
        $refrences = Refrence::all();
        $brands = brands::all();
        $Features = Features::all();


        $page = cheldpage::where('url_category', $url_category)->first();


        return view('singel_page', compact('page', 'setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));
    }


    public function brandspage()
    {

        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();

        $refrences = Refrence::all()->take(6);
        $brands = brands::all();
        $Features = Features::all();


        return view('brands', compact('page', 'setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));
    }


    public function aboutpage()
    {

        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();

        $refrences = Refrence::all()->take(6);
        $brands = brands::all();
        $Features = Features::all();


        return view('aboutus', compact('page', 'setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));
    }


    public function contactus()
    {

        $setting = setting::find(1);
        $Slider = Slider::find(1);
        $Service1 = Service::find(1);
        $Service2 = Service::find(2);
        $Service3 = Service::find(3);
        $AboutSection = AboutSection::find(1);
        $Category = Category::with('refrences')->get();

        $refrences = Refrence::all()->take(6);
        $brands = brands::all();
        $Features = Features::all();


        return view('contactus', compact('page', 'setting', 'Slider', 'Service1', 'Service2', 'Service3', 'AboutSection', 'Category', 'refrences', 'brands', 'Features'));
    }


}
