<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::truncate();

        $portfolio = new Portfolio;
        $portfolio->name = "Laptos 15 pulgadas";
        $portfolio->photo = "Nada";
        $portfolio->category_id = "1";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Laptos 21 pulgadas";
        $portfolio->photo = "nada";
        $portfolio->category_id = "1";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Tablet 8 pulgadas";
        $portfolio->photo = "nada";
        $portfolio->category_id = "2";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Tablet 11 pulgadas";
        $portfolio->photo = "nada";
        $portfolio->category_id = "2";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Impresoras Epson";
        $portfolio->photo = "nada";
        $portfolio->category_id = "3";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Impresoras HP";
        $portfolio->photo = "nada";
        $portfolio->category_id = "3";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Cartucho Epson";
        $portfolio->photo = "nada";
        $portfolio->category_id = "3";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Blusa rojo";
        $portfolio->photo = "nada";
        $portfolio->category_id = "4";
        $portfolio->save();

        $portfolio = new Portfolio;
        $portfolio->name = "Falda de Vestir";
        $portfolio->photo = "nada";
        $portfolio->category_id = "4";
        $portfolio->save();

    }
}
