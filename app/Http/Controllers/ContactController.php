<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.pages.contact');
    }

    public function contact_post(ContactRequest $request)
    {
        $message = new Message;
        $message->name    = $request->name;
        $message->surname = $request->surname;
        $message->email   = $request->email;
        $message->phone   = $request->phone;
        $message->msj     = $request->msj;

        $email = "eliyevperviz466@gmail.com";
        $title= 'HR INSTITUTE saytindan mesaj var';

        try{
            $data = [
                'email'  => $request->email,
                'surname'  => $request->surname,
                'name'  => $request->name,
                'phone'  => $request->phone,
                'msj'  => $request->msj,
            ];
            Mail::send('front.mail.sendmail', $data, function($m) use ($title,$email) {
                $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
            });
            $message->save();
            return response()->json(['message'=>'mesajınız uğurla göndərildi','status' => 1]);
        }catch (\Exception $exception){
            return response()->json(['message'=> $exception->getMessage(), 'status' => 0]);
        }

    }

}
