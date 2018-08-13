<!DOCTYPE html>
<html class="photography-demo-2">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Maya Comunicación Intetral</title>

    <meta name="keywords" content="Diseño e impresión, Línea Merchandising, Línea Textil" />
    <meta name="description" content="Realizamos todo tipo de diseños">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/logo.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    {!! Html::style('web/vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('web/vendor/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('web/vendor/animate/animate.min.css') !!}
    {!! Html::style('web/vendor/simple-line-icons/css/simple-line-icons.min.css') !!}
    {!! Html::style('web/vendor/owl.carousel/assets/owl.carousel.min.css') !!}
    {!! Html::style('web/vendor/owl.carousel/assets/owl.theme.default.min.css') !!}
    {!! Html::style('web/vendor/magnific-popup/magnific-popup.min.css') !!}

    <!-- Theme CSS -->
    {!! Html::style('web/css/theme.css') !!}
    {!! Html::style('web/css/theme-elements.css') !!}
    {!! Html::style('web/css/theme-blog.css') !!}
    {!! Html::style('web/css/theme-shop.css') !!}

    <!-- Current Page CSS -->
    {!! Html::style('web/vendor/rs-plugin/css/settings.css') !!}
    {!! Html::style('web/vendor/rs-plugin/css/layers.css') !!}
    {!! Html::style('web/vendor/rs-plugin/css/navigation.css') !!}

    <!-- Demo CSS -->
    {!! Html::style('web/css/demos/demo-photography-2.css') !!}
    {!! Html::style('web/css/demos/demo-medical.css') !!}

    <!-- Skin CSS -->
    {!! Html::style('web/css/skins/skin-photography.css') !!}

    <!-- Theme Custom CSS -->
    {!! Html::style('web/css/custom.css') !!}

    <!-- Head Libs -->
    {!! Html::script('web/vendor/modernizr/modernizr.min.js') !!}

</head>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="body">
    <header id="header" class="header-full-width transparent-header" data-plugin-options="{'stickyEnabled': false}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="javascript:">
                                    {!! Html::image('web/img/logo.png','Maya comunicación integral', array('titles' => 'Maya comunicación integral')) !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav">
                                <div class="header-nav-main header-nav-main-photography-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown-primary">
                                                <a class="nav-link active" href="servicios.html">
                                                    Servicios
                                                </a>
                                            </li>
                                            <li class="dropdown-primary">
                                                <a class="nav-link active" href="javascript:">
                                                    Nosotros
                                                </a>
                                            </li>
                                            <li class="dropdown-primary">
                                                <a class="nav-link active" href="javascript:">
                                                    Contáctenos
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook">
                                        <a href="https://www.facebook.com/Maya-Comunicaci%C3%B3n-Integral-392339790880864/?ref=br_rs" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="https://api.whatsapp.com/send?phone=51980672765&amp;text=Hola%20Buen%20día" target="_blank" title="Whatsapp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="https://www.messenger.com/t/392339790880864" target="_blank" title="Facebook Messenger">
                                            <i class="fab fa-facebook-messenger"></i>
                                        </a>
                                    </li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTENIDO DEL CUERPO -->
    @yield('contenido')

</div>

<!-- Vendor -->
{!! Html::script('web/vendor/jquery/jquery.min.js') !!}
{!! Html::script('web/vendor/jquery.appear/jquery.appear.min.js') !!}
{!! Html::script('web/vendor/jquery.easing/jquery.easing.min.js') !!}
{!! Html::script('web/vendor/jquery-cookie/jquery-cookie.min.js') !!}
{!! Html::script('web/vendor/popper/umd/popper.min.js') !!}
{!! Html::script('web/vendor/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('web/vendor/common/common.min.js') !!}
{!! Html::script('web/vendor/jquery.validation/jquery.validation.min.js') !!}
{!! Html::script('web/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') !!}
{!! Html::script('web/vendor/jquery.gmap/jquery.gmap.min.js') !!}
{!! Html::script('web/vendor/jquery.lazyload/jquery.lazyload.min.js') !!}
{!! Html::script('web/vendor/isotope/jquery.isotope.min.js') !!}
{!! Html::script('web/vendor/owl.carousel/owl.carousel.min.js') !!}
{!! Html::script('web/vendor/magnific-popup/jquery.magnific-popup.min.js') !!}
{!! Html::script('web/vendor/vide/vide.min.js') !!}
{!! Html::script('web/vendor/jquery-mousewheel/jquery.mousewheel.min.js') !!}
{!! Html::script('https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('integrity' => 'sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ', 'crossorigin' => 'anonymous')) !!}

<!-- Theme Base, Components and Settings -->
{!! Html::script('web/js/theme.js') !!}

<!-- Current Page Vendor and Views -->
{!! Html::script('web/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('web/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}

<!-- Current Page Vendor and Views -->
{!! Html::script('web/js/views/view.contact.js') !!}

<!-- Demo -->
{!! Html::script('web/js/demos/demo-medical.js') !!}

<!-- Theme Custom -->
{!! Html::script('web/js/custom.js') !!}

<!-- Theme Initialization Files -->
{!! Html::script('web/js/theme.init.js') !!}


</body>
</html>
