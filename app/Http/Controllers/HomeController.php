<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Counter;
use App\Models\Program;
use App\Models\Partner;


class HomeController extends Controller
{
    public function index()
    {
        $sliders=Slider::get();
        $counter=Counter::first();
        $partners=Partner::get();
        return view('front.pages.index',compact('sliders','counter','partners'));
    }
}
