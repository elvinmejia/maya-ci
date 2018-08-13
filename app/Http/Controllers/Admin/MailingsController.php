<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Customer;
use App\Mailing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailingsController extends Controller
{
    public function index()
    {
        $mailings = Mailing::all();
        return view('admin.mailings.index', compact('mailings'));
    }

    public function edit(Mailing $mailing)
    {
        return view('admin.mailings.edit', compact('mailing'));
    }

    public function update(Mailing $mailing, Request $request)
    {

        $this->validate($request, [
            'porcentage' => 'required',
            'name' => 'required',
            'text_before' => 'required',
            'price' => 'required',
            'color' => 'required',
            'content' => 'required',
            'cellphone01' => 'required',
            'cellphone02' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if ($request->hasFile('avatar')) {
            $mailing->avatar = $request->file('avatar')->store('mailings');//public del storage => storage/app/public...
        }

        $mailing->porcentage = $request->get('porcentage');
        $mailing->name = $request->get('name');
        $mailing->text_before = $request->get('text_before');
        $mailing->price = $request->get('price');
        $mailing->color = $request->get('color');
        $mailing->content = $request->get('content');
        $mailing->valid_month = $request->get('valid_month');
        $mailing->cellphone01 = $request->get('cellphone01');
        $mailing->cellphone02 = $request->get('cellphone02');
        $mailing->phone = $request->get('phone');
        $mailing->email = $request->get('email');
        $mailing->save();

        return redirect()->route('admin.mailing.edit', $mailing)->with('flash', 'El mailing ha sido editado');

    }

    public function show(Mailing $mailing)
    {
        return view('emails.message', compact('mailing'));
    }

    public function messages(){

        Customer::chunk(200, function ($customers){
            foreach ($customers as $customer){
                Mail::send('emails.message', ['customer' => $customer], function ($message) use ($customer){
                    $message->from('elvin.analistajr@gmail.com', 'Elvin Mejía Paucar');
                    $message->to($customer->email, $customer->name)->subject('Tenemos novedades para ti ' . $customer->name);
                });
            }
        });

        $mailings = Mailing::all();
        return back()->with('flash', ' Tu mensaje ha sido recibido con éxito', compact('mailings'));

    }


}
