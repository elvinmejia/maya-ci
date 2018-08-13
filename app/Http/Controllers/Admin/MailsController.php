<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mail;

class MailsController extends Controller
{
    public function index()
    {
        $mails = Mail::all();
        return view('admin.mailings.index', compact('mails'));
    }

    public function edit(Mail $mail)
    {
        return view('admin.mailings.edit', compact('mail'));
    }

    public function update(Mail $mail, Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'content' => 'required',
            'cellphone01' => 'image',
            'cellphone02' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if($request->hasFile('avatar'))
        {
            $mail->avatar = $request->file('avatar')->store('mailings', 'public');//public del storage => storage/app/public...
        }

        $mail->porcentage = $request->get('porcentage');
        $mail->name = $request->get('name');
        $mail->price = $request->get('price');
        $mail->content = $request->get('content');
        $mail->valid_month = $request->get('valid_month');
        $mail->cellphone01 = $request->get('cellphone01');
        $mail->cellphone02 = $request->get('cellphone02');
        $mail->phone = $request->get('phone');
        $mail->email = $request->get('email');
        $mail->save();

        return redirect()->route('admin.mailing.edit', $mail)->with('flash', 'El mailing ha sido editado');

    }

}
