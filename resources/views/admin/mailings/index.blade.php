@extends('admin.layout')

@section('header')
    <header class="page-header"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <h2>Mailings</h2>

        <div class="right-wrapper pull-right" style="margin-right: 20px;">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>mailings</span></li>
            </ol>

        </div>
    </header>
@endsection

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">mailings</h2>

        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Color</th>
                    <th>Producto</th>
                    <th>Antes</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Válido hasta</th>
                    <!--<th>Cel 1</th>
                    <th>Cel 2</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Total</th>-->
                    <th class="hidden-phone">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mailings as $mailing)
                    <tr class="gradeX">
                        <td><div style="background-color: {{ $mailing->color }}; width: 20px; height: 20px;"></div></td>
                        <td>{{ $mailing->name }}</td>
                        <td>{{ $mailing->text_before }}</td>
                        <td>{{ $mailing->price }}</td>
                        <td>{{ $mailing->content }}</td>
                        <td>
                            <span style="display: block; text-align: center; margin-bottom: 30px;">
                                <img src="../img/{{ $mailing->avatar }}" alt="" style="height: 50px;">
                            </span>
                        </td>
                        <td>{{ $mailing->valid_month }}</td>
                        {{--<td>{{ $mailing->cellphone01 }}</td>
                        <td>{{ $mailing->cellphone02 }}</td>
                        <td>{{ $mailing->phone }}</td>
                        <td>{{ $mailing->email }}</td>--}}
                        {{-- <td>{{ $mailing->price - (($mailing->porcentage / 100) *  $mailing->price) }}</td>--}}
                        <td>
                            <a href="{{ route('admin.mailing.edit', $mailing) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <a href="{{ route('mail') }}" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--<a style="background-color: green; padding: 10px; color: #fff; text-decoration: none; margin-top: 20px; text-align: right" href="{{ route('admin.mailing.messages') }}">Enviar correos masivos</a>--}}
        </div>
    </section>
@endsection

@push('styles')

{!! Html::style('admin_porto/assets/vendor/select2/select2.css') !!}
{!! Html::style('admin_porto/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') !!}

@endpush

@push('scripts')
{!! Html::script('admin_porto/assets/vendor/select2/select2.js') !!}
{!! Html::script('admin_porto/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') !!}
{!! Html::script('admin_porto/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') !!}
{!! Html::script('admin_porto/assets/javascripts/tables/examples.datatables.default.js') !!}
@endpush