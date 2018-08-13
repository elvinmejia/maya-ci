@extends('admin.layout')

@section('header')
    <header class="page-header">
        <h2>Toda los clientes</h2>

        <div class="right-wrapper pull-right" style="margin-right: 20px;">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>clientes</span></li>
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

            <h2 class="panel-title">clientes</h2>

        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <!--<th></th>-->
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th>Nombre del mailing</th>
                    <th class="hidden-phone">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr class="gradeX">
                        {{--<td>
                            <input type="checkbox" value="{{ $customer->id }}" name="message[]">
                        </td>--}}
                        {{-- <td>{{ $customer->id }}</td> --}}
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->name_mailing }}</td>
                        <td>
                            {{--<a href="{{ route('admin.clientes.edit', $service) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>--}}
                            {{--<form method="post" action="{{ route('admin.servicios.destroy', $service) }}" style="display:inline;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                        onclick="return confirm('¿Estás seguro de querer eliminar este servicio?')"
                                ><i class="fa fa-times"></i></button>
                            </form>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a style="background-color: green; padding: 10px; color: #fff; text-decoration: none; margin-top: 20px; text-align: right" href="{{ route('admin.clientes.messages') }}">Enviar correos masivos</a>
    
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