@extends('admin.layout')

@section('header')
    <header class="page-header">
        <h2>Crear cliente</h2>

        <div class="right-wrapper pull-right" style="margin-right: 20px;">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clientes') }}">
                        Cliente
                    </a>
                </li>
                <li><span>Crear</span></li>
            </ol>

        </div>
    </header>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                    <h2 class="panel-title">Creando Cliente</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.clientes.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="textareaDefault">Nombres</label>
                            <div class="col-md-7">
                                <input name="name" value="{{ old('name') }}" class="form-control" data-plugin-maxlength maxlength="30" placeholder="Ingrese su nombre"/>
                                <p>
                                    <code>max-length</code> set to 30.
                                </p>
                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="textareaDefault">Nombres</label>
                            <div class="col-md-7">
                                <input name="email" value="{{ old('email') }}" class="form-control" data-plugin-maxlength maxlength="30" placeholder="Ingrese su nombre"/>
                                <p>
                                    <code>max-length</code> set to 30.
                                </p>
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="textareaDefault">Nombres</label>
                            <div class="col-md-7">
                                <input name="address" value="{{ old('address') }}" class="form-control" data-plugin-maxlength maxlength="30" placeholder="Ingrese su nombre"/>
                                <p>
                                    <code>max-length</code> set to 30.
                                </p>
                                {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="textareaDefault">Nombres</label>
                            <div class="col-md-7">
                                <input name="phone" value="{{ old('phone') }}" class="form-control" data-plugin-maxlength maxlength="30" placeholder="Ingrese su nombre"/>
                                <p>
                                    <code>max-length</code> set to 30.
                                </p>
                                {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Guardar</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection

@push('styles')

{!! Html::style('admin_porto/assets/vendor/select2/select2.css') !!}
{!! Html::style('admin_porto/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') !!}
{!! Html::style('admin_porto/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') !!}
{!! Html::style('admin_porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}
{!! Html::style('admin_porto/assets/vendor/summernote/summernote.css') !!}
{!! Html::style('admin_porto/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') !!}

@endpush

@push('scripts')
{!! Html::script('admin_porto/assets/vendor/select2/select2.js') !!}
{!! Html::script('admin_porto/assets/vendor/nanoscroller/nanoscroller.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js') !!}
{!! Html::script('admin_porto/assets/vendor/summernote/summernote.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
{!! Html::script('admin_porto/assets/javascripts/forms/examples.advanced.form.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') !!}

@endpush
