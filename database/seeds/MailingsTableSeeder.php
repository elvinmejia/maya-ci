<?php

use Illuminate\Database\Seeder;

use App\Mailing;

class MailingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('mailings');
        Mailing::truncate();

        $mail = new Mailing;
        $mail->porcentage = '10% de descuento';
        $mail->name = 'Tarjetas de presentación';
        $mail->text_before = 'Antes: 90.00';
        $mail->price = 90;
        $mail->color = '#39B54A';
        $mail->content = 'Impresion full color tira y retira en couché de 350 gr. plastificado mate, tamaño 9x5.5 cm, incluye el diseño. (no incluye creación de logotipo)';
        $mail->avatar = '';
        $mail->valid_month = 'Agosto';
        $mail->cellphone01 = '984786023';
        $mail->cellphone02 = '980672765';
        $mail->phone = '6767 126';
        $mail->email = 'maya@maya-ci.com';
        $mail->save();
    }
}
