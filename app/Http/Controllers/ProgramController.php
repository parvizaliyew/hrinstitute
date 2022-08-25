<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\FormMessage;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ProgramController extends Controller
{
    public function hr($slug)
    {
        $hr_heller=Program::withTranslation()->where('category_id',2)->get();
        $hr_hell=Program::withTranslation()->where('slug_az',$slug)->orWhere('slug_en',$slug)->first();
        return view('front.pages.hr',compact('hr_hell','hr_heller'));
    }

    public function sertifkasiya($slug)
    {
        $ser_programs=Program::withTranslation()->where('category_id',3)->get();
        $ser_pro=Program::withTranslation()->where('slug_az',$slug)->orWhere('slug_en',$slug)->first();
        return view('front.pages.sertifkasiya',compact('ser_pro','ser_programs'));
    }

    public function tedris($slug)
    {
        $edu_programs=Program::withTranslation()->where('category_id',4)->get();
        $edu_pro=Program::withTranslation()->where('slug_az',$slug)->orWhere('slug_en',$slug)->first();
        return view('front.pages.training',compact('edu_pro','edu_programs'));
    }

    public function form_post(ContactRequest $request)
    {
        $validated = $request->validate([
            'name'=> 'required|max:255',
            'surname'=> 'required|max:255',
            'email'   => 'required|max:255',
            'phone'   => 'required|max:255',
            'msj'=>'max:1000',
        ]);
        $message = new FormMessage;
        $message->name = $validated['name'];
        $message->surname = $validated['surname'];
        $message->email    = $validated['email'];
        $message->phone    = $validated['phone'];
        $message->msj = $validated['msj'];
        $message->apply_type=$request->apply_type;

        $email = "eliyevperviz466@gmail.com";
        $title= 'HR INSTITUTE saytindan mesaj var';

        Mail::send('front.mail.form_mail',
        [
        'apply_type'=>$request->apply_type,
        'name'=>$request->name,
        'surname'=>$request->surname,
        'email'   =>$request->email,
        'phone'   =>$request->phone,
        'msg' =>$request->msj ,
        
        ],
            function($message) use ($email,$title){
                $message->to($email)->subject($title);

            });
            
            $message->save();
        return redirect()->back()->with('success',__('lang.success'));
    }
}
