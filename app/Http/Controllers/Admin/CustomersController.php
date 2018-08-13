<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;
use App\Mailing;
//use App\Events\CustomerWasCreated;


class CustomersController extends Controller
{
    public function index()
    {

        $customers = Customer::join('mailings', 'customers.mailing_id', '=', 'mailings.id')
            ->select('customers.id', 'customers.mailing_id', 'customers.name', 'customers.email', 'customers.address', 'mailings.name as name_mailing', 'customers.phone')
            ->orderBy('customers.id', 'desc')->get();
        return view('admin.clientes.index', compact('customers'));
    }

    public function messages(){

        Customer::chunk(200, function ($customers){
            foreach ($customers as $customer){
                $mailings = Mailing::all();
                Mail::send('emails.message', ['customer' => $customer, 'mailings' => $mailings], function ($message) use ($customer){
                    $message->from('elvin.analistajr@gmail.com', 'Elvin Mejía Paucar');
                    $message->to($customer->email, $customer->name)->subject('Tenemos novedades para ti ' . $customer->name);
                });
            }
        });


        return back()->with('flash', ' Tu mensaje ha sido recibido con éxito');

    }


}
