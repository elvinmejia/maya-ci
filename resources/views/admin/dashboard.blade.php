@extends('admin.layout')

@section('header')
    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right" style="margin-right: 20px;">
            <ol class="breadcrumbs">
                <li>
                    <a href="javascript:">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>

        </div>
    </header>
@endsection

@section('contenido')
    <p>Bienvenido: {{ auth()->user()->name }}</p>
@endsection