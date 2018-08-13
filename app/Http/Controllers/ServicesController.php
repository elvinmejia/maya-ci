<?php

namespace App\Http\Controllers;

use App\Category;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Service $service, Category $category)
    {

        return view('pages.service_id', [
            'categories' => $service->categories()->get(),
            'portfolios' => Portfolio::all(),
        ]);


        /*return view('pages.service_id', [
            'categories' => $service->categories()->get(),
            'portfolios' => Portfolio::all()->where('category_id', '=', $category->id),
        ]);*/

    }

    /*public function show(Service $service, Category $category, Portfolio $portfolio)
    {

        $portfolios = $portfolio
            ->where("category_id", "=", $category->id)
            ->get();

        return view('pages.service_id', [
            'categories' => $service->categories()->get(),
            //'portfolios' => Portfolio::all(),
        ], compact('portfolios'));
    }*/
}
