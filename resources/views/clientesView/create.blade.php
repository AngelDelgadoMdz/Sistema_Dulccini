{{-- Formulario de creación de clientes --}}

@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{ url('/clientes') }}" method="post" enctype="multipart/form-data">

    @csrf
    {{-- //Con esto podemos incluir las referencias a otras vistas --}}
    @include('clientesView.form', ['modo'=>'Crear'])



</form>
</div>
@endsection