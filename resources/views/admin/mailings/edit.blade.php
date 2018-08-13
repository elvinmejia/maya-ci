@extends('admin.layout')

@section('header')
    <header class="page-header">
        <h2>Editar Mailing</h2>

        <div class="right-wrapper pull-right" style="margin-right: 20px;">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.mailing.index') }}">
                        Mailing
                    </a>
                </li>
                <li><span>Editar</span></li>
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
                    <h2 class="panel-title">Editando Mailing</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" method="POST" action="{{ route('admin.mailing.update', $mailing) }}" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label">Subir foto</label>
                            <div class="col-md-6">
                                <div class="fileupload fileupload-exists" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fa fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview">{{ $mailing->avatar }}</span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Cambio</span>
                                            <span class="fileupload-new">Seleccione foto</span>
                                            <input type="file" name="avatar"/>
                                        </span>
                                        <a href="javascrit:" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                                    </div>
                                </div>
                                {!! $errors->first('avatar', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('porcentage') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="porcentage">Porcentaje %</label>
                            <div class="col-md-7">
                                <input name="porcentage" value="{{ old('porcentage', $mailing->porcentage) }}" class="form-control" data-plugin-maxlength maxlength="20" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 20.
                                </p>
                                {!! $errors->first('porcentage', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="name">Nombre del producto</label>
                            <div class="col-md-7">
                                <input name="name" value="{{ old('name', $mailing->name) }}" class="form-control" data-plugin-maxlength maxlength="80" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 80.
                                </p>
                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('text_before') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="name">Precio Anterior</label>
                            <div class="col-md-7">
                                <input name="text_before" value="{{ old('text_before', $mailing->text_before) }}" class="form-control" data-plugin-maxlength maxlength="80" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 80.
                                </p>
                                {!! $errors->first('text_before', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="price">Precio s/</label>
                            <div class="col-md-7">
                                <input name="price" value="{{ old('price', $mailing->price) }}" class="form-control" data-plugin-maxlength maxlength="9" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 9.
                                </p>
                                {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label">Default</label>
                            <div class="col-md-6">
                                <input name="color" value="{{ old('color', $mailing->color) }}" data-plugin-colorpicker class="colorpicker-default form-control"/>
                                {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="price">Contenido</label>
                            <div class="col-md-7">
                                {{-- <input name="price" value="{{ old('price', $mailing->price) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>--}}
                                <textarea name="content" cols="73" rows="4">{{ old('content', $mailing->content) }}</textarea>
                                {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('valid_month') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="valid_month">Válido hasta</label>
                            <div class="col-md-7">
                                <input name="valid_month" value="{{ old('valid_month', $mailing->valid_month) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 5.
                                </p>
                                {!! $errors->first('valid_month', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cellphone01') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="cellphone01">Celular 1</label>
                            <div class="col-md-7">
                                <input name="cellphone01" value="{{ old('cellphone01', $mailing->cellphone01) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 5.
                                </p>
                                {!! $errors->first('cellphone01', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cellphone02') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="cellphone02">Celular 2</label>
                            <div class="col-md-7">
                                <input name="cellphone02" value="{{ old('cellphone02', $mailing->cellphone02) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 5.
                                </p>
                                {!! $errors->first('cellphone02', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="phone">Teléfono</label>
                            <div class="col-md-7">
                                <input name="phone" value="{{ old('phone', $mailing->phone) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 5.
                                </p>
                                {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="email">Correo electrónico</label>
                            <div class="col-md-7">
                                <input name="email" value="{{ old('email', $mailing->email) }}" class="form-control" data-plugin-maxlength maxlength="5" placeholder="Ingrese el porcentaje en números"/>
                                <p>
                                    <code>max-length</code> set to 5.
                                </p>
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Guardar</button>
                        </div>
                        {{-- <span style="display: block; text-align: center; margin-bottom: 30px;">
                            <img src="{{ Storage::url($mail->avatar) }}" alt="" style="height: 200px;">
                        </span>--}}
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
{!! Html::style('admin_porto/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') !!}
<link rel="stylesheet" href="" />

@endpush

@push('scripts')
{!! Html::script('admin_porto/assets/vendor/select2/select2.js') !!}
{!! Html::script('admin_porto/assets/vendor/nanoscroller/nanoscroller.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js') !!}
{!! Html::script('admin_porto/assets/vendor/summernote/summernote.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
{!! Html::script('admin_porto/assets/javascripts/forms/examples.advanced.form.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') !!}
{!! Html::script('admin_porto/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') !!}

@endpush
