{{-- Tabla de pedidos --}}


<link rel="stylesheet" href="{{ asset('css/app.css') }}">


@include('header')

@extends('layouts.app')
@section('content')
    <style>
        /* Aplicamos algunos estilos generales a la tabla */
        .table {
            margin-top: 20px !important;
            font-size: 14px;
            border-radius: 20px;
            overflow: hidden;
        }

        /* Estilo para el encabezado de la tabla */
        thead {
            background-color: #e9ecef;

            color: #333;
        }

        /* Estilo para las filas impares de la tabla */
        tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        /* Estilo para las filas pares de la tabla */
        tbody tr:nth-child(even) {
            background-color: #fff;
        }

        /* Estilo para las celdas de las acciones */
        td button {
            margin-right: 5px;
        }

        /* Estilo para el botón de editar */
        .btn-info {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        /* Estilo para el botón de eliminar */
        .btn-danger {
            background-color: #e74a3b;
            border-color: #e74a3b;
        }

        /* Estilos para la tabla de pasteles */
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0px 0px 5px #b2d3d2;
        }

        .table thead th {
            font-weight: bold;
            background-color: #f7f7f7;
            border-bottom: 2px solid #b2d3d2;
            padding: 0.5rem;
            text-align: center;
        }

        .table tbody td {
            border-bottom: 1px solid #b2d3d2;
            padding: 0.5rem;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .table tbody td:first-child {
            font-weight: bold;
        }

        .table td {
            vertical-align: middle;
            text-align: center;
            font-size: 1.3em;

        }


        td:nth-child(odd) {
            background-image: linear-gradient(to top, #f5f7fa 0%, #ecf3ff 100%);
        }

        td:nth-child(even) {
            background-image: linear-gradient(to top, #f5f7fa 0%, #ecf3ff 100%);
        }

        body {
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        }

        .btn-dulccini-color {
            background-color: #77418e;
            color: white;

        }

        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');

        .th-dulccini {
            font-family: 'Roboto Mono', monospace;
            font-size: 1.3em;
        }
    </style>

    <div class="container">

        @if (Session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif



        <a class="btn btn-success my-3" href="{{ url('pedidos/create') }}"> Registrar nuevo pedido </a>

        <table class="table table-light table-bordered table-hover ">
            <thead class="thead-light">
                <tr>
                    <th class="th-dulccini">#</th>
                    <th class="th-dulccini">Producto</th>
                    <th class="th-dulccini">Cliente</th>
                    <th class="th-dulccini">Fecha de entrega</th>
                    <th class="th-dulccini">Hora de entrega</th>
                    <th class="th-dulccini">Status</th>
                    <th class="th-dulccini">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->producto_id }}</td>
                        <td>{{ $pedido->cliente_id }}</td>
                        <td>{{ $pedido->fecha }}</td>
                        <td>{{ $pedido->hora }}</td>
                        <td>Status</td>
                        <td> <a href="{{ url('/pedidos/' . $pedido->id . '/edit') }}" class="btn btn-primary">
                                Editar
                            </a>

                            <form action="{{ url('/pedidos/' . $pedido->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar este pedido?')"
                                    value="Borrar" class="btn btn-danger btn-table">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>



        </table>
    </div>
@endsection
