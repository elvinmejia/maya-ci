<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>{{ config('app.name') }} | Mail</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

</head>
<body style="background-color: rgb(245, 247, 248) !important;">


<div style="width: 700px; margin-left: auto; margin-right: auto;">
    @foreach($mailings as $mailing)
    <div style="background-color: #fff;">
        <table style="margin-top: 30px;">
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="width: 20%">
                    <span>
                        <img src="http://ngtperu.com/mail/logo-mail.png" alt="" style="width: 90px;">
                    </span>
                </td>
                <td style="width: 60%">
                    <p style="margin: 0; padding-bottom: 8px; font-size: 10px; text-align: center">
                        <strong>
                            <a href="javascript:" style="color: #000; text-decoration: none;">comparte a un amigo</a>
                        </strong>
                    </p>
                    <p style="line-height: 16px; font-size: 10px; text-align: center;">
                        Si no puedes ver este correo haz click <a href="javascript:">aquí</a><br>
                        Para garantiazar la entrega de los e-mails tu bandeja de entrada, por favor añade a tu libreta de direcciones nuestra dirección.
                        <a href="javascript:">jim.mejia@maya-ci.com</a>
                    </p>
                </td>
                <td style="width: 20%; padding-top: 55px; padding-right: 15px;">
                    <span style="display: block; text-align: right;">
                        <img src="http://ngtperu.com/mail/facebook.png" alt="" style="width: 30px;">
                        <img src="http://ngtperu.com/mail/twitter.png" alt="" style="width: 30px;">
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div style="background-color: {{ $mailing->color }}; width: 100%; padding-top: 40px;">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: center;">
                    <h1 style="margin: 0px; font-size: 48px; text-align: center; margin: 0px; color: #fff;">
                        <strong>{{ $mailing->porcentage }}</strong>
                    </h1>
                </td>
            </tr>
            <tr>
                <td>
                    <h3 style="font-size: 24px; color: #fff; text-align: center; margin: 0; line-height: 11px;">{{ $mailing->name }}</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 style="text-decoration:line-through; color: #fff; text-align: center; margin: 0;">{{ $mailing->text_before }}</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td>
                    <div style="background-image: url('http://ngtperu.com/mail/price.png'); background-size: 33%; height: 197px; background-position: center 32px; background-repeat: no-repeat;">
                        <h2 style="text-align: center; margin: 0; padding-top: 57px; font-size: 67px; font-family: 'arial black', sans-serif; font-style: italic;"><span style="font-size: 35px; font-family: arial,sans-serif;">s/</span>{{ $mailing->price }}<sup style="font-size: 35px; margin-left: 8px;">*</sup></h2>
                        <h2 style="font-style: italic; font-size: 25px; margin: 0; text-align: center; line-height: 0px;">x millar</h2>
                    </div>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td>
                    <span style="display: block; text-align: right; margin-right: 25px; margin-bottom: 10px;">
                        <img src="http://ngtperu.com/mail/delivery.png" alt="" style="width: 200px;">
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div class="description" style="background-color: #353432; text-align: center; color: #fff; width: 100%; padding: 5px 0 5px 0;">
        <table style="width: 450px; margin-left: auto; margin-right: auto; line-height: 18px;">
            <tr>
                <td>
                    <p>{{ $mailing->content }}</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="image" style="position: relative; bottom: 16px;">
        <span>
            <!--<img src="http://ngtperu.com/mail/portfolio.png" alt="" style="width: 100%;">-->
            <img src="../img/{{ $mailing->avatar }}" alt="" style="width: 100%;">
        </span>
    </div>
    <div class="footer" style="background-color: #fff; position: relative; bottom: 15px;">
        <div class="igv" style="padding-top: 10px; font-size: 12px; width: 100%; text-align: center;">
            <p style="margin-left: auto; margin-right: auto;">*Precio no incluye IGV, promoción válida, todo el mes de {{ $mailing->valid_month_mailing }}, Delivery dependiendo de la zona</p>
        </div>
        <div class="title" style="text-align: center; padding-top: 20px;">
            <h2><strong>Solicítalo ya!</strong></h2>
        </div>
        <div class="red-social-footer" style="width: 100%;">
            <table class="w3-table" style="width: 641px; margin-left: auto; margin-right: auto;">
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><img src="http://ngtperu.com/mail/whatsapp.png" alt="" style="width: 28px;"></td>
                    <td><span>{{ $mailing->cellphone01 }} / {{ $mailing->cellphone02 }}</span></td>
                    <td><img src="http://ngtperu.com/mail/telefono.png" alt="" style="width: 28px;"></td>
                    <td><span>(01) {{ $mailing->phone }}</span></td>
                    <td><img src="http://ngtperu.com/mail/mail.png" alt="" style="width: 28px;"></td>
                    <td><span><a href="" style="text-decoration: none; color: #212529;">{{ $mailing->email }}</a></span></td>
                </tr>
            </table>
            <div style="text-align: right; color: #bdbdbf; padding: 30px 0px 10px 0px;">
                <div><a href="" style="text-decoration: none; color: #bdbdbf;">www.maya-ci.com</a></div>
            </div>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <span>
                            <img src="http://ngtperu.com/mail/sombra.gif" alt="" style="width: 100%;">
                        </span>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center; padding: 40px 0px 40px 0px;">
                        <a href="http://maya-ci.com/" target="_blank" style="background-color: #211916; color: #fff; border-radius: 4px; padding: 10px 16px; text-decoration: none;">Conoce más de nosotros</a>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <p style="margin: 0px; font-size: 10px; text-align: center;">Si Ud. no desea recibir en adelante más de esta publicidad envíe un mensaje con asunto "remover" a
                            <a href="http://maya-ci.com/" target="_blank" style="text-decoration: none;">remover@maya-ci.com</a></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endforeach
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>