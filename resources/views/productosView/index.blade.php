
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
        box-shadow: 0px 0px 5px #ffd8e9;
    }

    .table thead th {
        font-weight: bold;
        background-color: #f7f7f7;
        border-bottom: 2px solid #ffd8e9;
        padding: 0.5rem;
        text-align: center;
    }

    .table tbody td {
        border-bottom: 1px solid #ffd8e9;
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


    td:nth-child(even) {
        background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%);
    }

    td:nth-child(odd) {
        background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%);
    }

    body {
        
        background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
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

    #header {
        transition: opacity 0.5s ease-in-out, display 0.5s ease-in-out;

}
   

</style>



<div class="wrapper">
    @include('header')
    <main id="mymain">
        @extends('layouts.app')
        @section('content')
           
        
            <div class="container">
        
                @if (Session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif
        
        
        
                <a class="btn btn-success my-3" href="{{ url('productos/create') }}"> Registrar nuevo producto </a>
        
                <table class="table table-light table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th class="th-dulccini">#</th>
                            <th class="th-dulccini">Foto</th>
                            <th class="th-dulccini">Producto</th>
                            <th class="th-dulccini">Descripcion</th>
                            <th class="th-dulccini">Precio</th>
                            <th class="th-dulccini">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>
        
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $producto->foto }}"
                                        alt="" width="200">
        
                                </td>
                                <td class="">{{ $producto->nombre }}</td>
                                <td class="">{{ $producto->descripcion }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td> <a href="{{ url('/productos/' . $producto->id . '/edit') }}" class="btn btn-primary">
                                        Editar
                                    </a>
        
                                    <form action="{{ url('/productos/' . $producto->id) }}" method="post" class="d-inline">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('¿Quieres borrar este producto?')"
                                            value="Borrar" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        
        
        
                </table>
            </div>
        @endsection
        
    </main>
  </div>
  
{{-- Este es un script para hacer como una tipo animacíon para que el header se oculte cuando el mouse no está cerca
Mi idea es que así se aprecia de mejor manera el contenido de las tablas, pero aún no está bien pulido --}}
  <script>
    // Seleccionar el elemento del header por su ID
    var header = document.getElementById("myheader");

    // Función para comprobar la posición del cursor en la página
    function checkMousePosition(event) {
        // Obtener la posición vertical actual de la página
        var mouseY = event.clientY;

        // Si la posición vertical es mayor o igual a 500 píxeles, ocultar el header suavemente
        if (mouseY >= 500) {
            header.style.opacity = "0";
            header.style.display = "none";
        } else {
            header.style.opacity = "1";
            header.style.display = "";
        }
    }
    
    // Ejecutar la función checkMousePosition en el evento "mousemove" de la ventana
    window.addEventListener("mousemove", checkMousePosition);
</script>


