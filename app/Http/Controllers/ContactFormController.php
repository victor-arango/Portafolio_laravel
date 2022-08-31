<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Extension\Mention\MentionParser;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'name.required' => 'Necesito tu nombre',

        ]);

        Mail::to('victorarangoquiroz@gmail.com')->queue(new MessageReceived ($message));



        return back()->with('status', 'Recibimos tu mensaje, te respondere en menos de 24 horas');
    }
}
