<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Service;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Service::truncate();

        $service = new Service;
        $service->name = 'Tecnología';
        $service->url = str_slug('Tecnología');
        $service->content = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.';
        $service->class = 'title_01';
        $service->class_img = 'title_maya_01';
        $service->save();

        $service = new Service;
        $service->name = 'Moda';
        $service->url = str_slug('Moda');
        $service->content = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.';
        $service->class = 'title_02';
        $service->class_img = 'title_maya_02';
        $service->save();

        $service = new Service;
        $service->name = 'Calzado';
        $service->url = str_slug('Calzado');
        $service->content = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.';
        $service->class = 'title_03';
        $service->class_img = 'title_maya_03';
        $service->save();

        $category = new Category;
        $category->name = 'Laptops';
        $category->url = str_slug('Laptops');
        $category->service_id = '1';
        $category->save();

        $category = new Category;
        $category->name = 'Tablets';
        $category->url = str_slug('Tablets');
        $category->service_id = '1';
        $category->save();

        $category = new Category;
        $category->name = 'Impresoras y Tintas';
        $category->url = str_slug('Impresoras y Tintas');
        $category->service_id = '1';
        $category->save();

        $category = new Category;
        $category->name = 'Moda Mujer';
        $category->url = str_slug('Moda Mujer');
        $category->service_id = '2';
        $category->save();

        $category = new Category;
        $category->name = 'Moda Hombre';
        $category->url = str_slug('Moda Hombre');
        $category->service_id = '2';
        $category->save();

        $category = new Category;
        $category->name = 'Moda Infantil';
        $category->url = str_slug('Moda Infantil');
        $category->service_id = '2';
        $category->save();

        $category = new Category;
        $category->name = 'Calzado Hombre';
        $category->url = str_slug('Calzado Hombre');
        $category->service_id = '3';
        $category->save();

        $category = new Category;
        $category->name = 'Calzado Mujer';
        $category->url = str_slug('Calzado Mujer');
        $category->service_id = '3';
        $category->save();

        $category = new Category;
        $category->name = 'Calzado Infantil';
        $category->url = str_slug('Calzado Infantil');
        $category->service_id = '3';
        $category->save();
    }
}
