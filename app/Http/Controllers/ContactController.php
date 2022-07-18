<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('thriftaja3@gmail.com')->send(new ContactMail($data));
        return redirect()->route('kontakthriftaja')
        ->with('success','Kontak Telah Dikirim Terima Kasih');
    }
}