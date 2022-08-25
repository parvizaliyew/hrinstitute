<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Review;
use App\Models\Cooperation;
class AboutController extends Controller
{
    public function index()
    {
        $teams=Team::orderBy('id','desc')->get();
        $reviews=Review::orderBy('id','desc')->get();
        return view('front.pages.about',compact('teams','reviews'));
    }

    public function cooperation()
    {
        $cooperations=Cooperation::withTranslation()->orderBy('id','DESC')->get();

        return view('front.pages.cooperation',compact('cooperations'));
    }
}
