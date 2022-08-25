<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Event;

class EventController extends Controller
{
    public function event()
    {
        $data_now=Carbon::now();
        $events_future=Event::withTranslation()->where('date','>',$data_now)->get();
        $events_finish=Event::withTranslation()->where('date','<',$data_now)->get();


        return view('front.pages.project',compact('events_future','events_finish'));
    }


    public function future($slug)
    {
        $data_now=Carbon::now();
        $event_fut=Event::withTranslation()->where('slug_az',$slug)->orWhere('slug_en',$slug)->first();

        return view('front.pages.future_event',compact('event_fut'));
    }

    public function finish($slug)
    {
        $data_now=Carbon::now();
        $event_fin=Event::withTranslation()->where('slug_az',$slug)->orWhere('slug_en',$slug)->first();
        $events_finish=Event::withTranslation()->where('date','<',$data_now)->get();
        return view('front.pages.last_event',compact('event_fin','events_finish'));
    }

}
