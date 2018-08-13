<!doctype html>
<html class="fixed">
<head>

    <title>{{ config('app.name') }} | Iniciar Sesión</title>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
{!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light') !!}

<!-- Vendor CSS -->
{!! Html::style('admin_porto/assets/vendor/bootstrap/css/bootstrap.css') !!}
{!! Html::style('admin_porto/assets/vendor/font-awesome/css/font-awesome.css') !!}
{!! Html::style('admin_porto/assets/vendor/magnific-popup/magnific-popup.css') !!}
{!! Html::style('admin_porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}

<!-- Theme CSS -->
{!! Html::style('admin_porto/assets/stylesheets/theme.css') !!}

<!-- Skin CSS -->
{!! Html::style('admin_porto/assets/stylesheets/skins/default.css') !!}

<!-- Theme Custom CSS -->
{!! Html::style('admin_porto/assets/stylesheets/theme-custom.css') !!}

<!-- Head Libs -->
    {!! Html::script('admin_porto/assets/vendor/modernizr/modernizr.js') !!}

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            {!! Html::image('admin_porto/assets/images/logo.png','titulo imagen', array('style' => 'height: 54px')) !!}
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Iniciar Sesión</h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }} {{-- cuando se usa el formulario de tipo post siempre se debe usar esto--}}
                    <div class="form-group mb-lg{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                        <label>Correo Electrónico</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="email" class="form-control input-lg" value="{{ old('email') }}" required autofocus/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mb-lg{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                        <div class="clearfix">
                            <label class="pull-left">Contraseña</label>
                            <a href="{{ route('password.request') }}" class="pull-right">Reestablecer contraseña</a>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" required />
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="RememberMe">Recuerdame</label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Ingresar</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. Todo los derechos reservados.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
{!! Html::script('admin_porto/assets/vendor/jquery/jquery.js') !!}
{!! Html::script('admin_porto/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap/js/bootstrap.js') !!}
{!! Html::script('admin_porto/assets/vendor/nanoscroller/nanoscroller.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
{!! Html::script('admin_porto/assets/vendor/magnific-popup/magnific-popup.js') !!}
{!! Html::script('admin_porto/assets/vendor/jquery-placeholder/jquery.placeholder.js') !!}

<!-- Theme Base, Components and Settings -->
{!! Html::script('admin_porto/assets/javascripts/theme.js') !!}

<!-- Theme Custom -->
{!! Html::script('admin_porto/assets/javascripts/theme.custom.js') !!}

<!-- Theme Initialization Files -->
{!! Html::script('admin_porto/assets/javascripts/theme.init.js') !!}

</body>

</html>