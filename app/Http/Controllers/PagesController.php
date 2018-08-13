<?php

namespace App\Http\Controllers;

use App\Service;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('pages.home');
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.service', compact('services'));
    }
}
