
<style>
    body{
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
    }
    .myform{
        background-image: linear-gradient(to top, #f5f7fa 0%, #ecf3ff 100%);
        border-radius: 20px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    .myfont{
        font-family: 'Pacifico', cursive;
        font-size: 3em !important;
    }
    .icono-label {
    display: inline-block;
    vertical-align: middle;
    margin-right: 0.5em;
    height: 1.5em;
    width: 1.5em;
}
  

</style>







<div class="container-fluid mx-auto myform w-75 p-5">
    <h1 class="text-center myfont"> {{$modo}} pedido </h1>
    
    
    {{-- <div class="form-group my-4">
        <label for="producto_id"> Producto </label>
        <input class="form-control" type="select" name="producto_id" id="producto_id" value="{{ isset($pedido->producto_id) ? $pedido->producto_id: '' }}">
        
        
    
    </div> --}}



    <div class="form-group my-4">
        <label class="my-2" for="producto_id"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/7387/7387315.png" alt=""> 
            Producto
        </label>
        {{-- <input class="form-control" type="select" name="producto_id" id="producto_id" value="{{ isset($pedido->producto_id) ? $pedido->producto_id: '' }}"> --}}
        <select class="form-select" name="producto_id">
            @foreach($productos as $id => $producto)
                <option value="{{ $id }}">{{ $producto }}</option>
            @endforeach
        </select>
        
    
    </div>



    
    {{-- <div class="form-group my-4">
        <label for="cliente_id"> Cliente </label>
        <input class="form-control" type="text" name="cliente_id" id="cliente_id" value="{{ isset($pedido->cliente_id) ? $pedido->cliente_id : '' }}">
    </div> --}}


    <div class="form-group my-4">
        <label class="my-2" for="cliente_id"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/10164/10164370.png" alt=""> 
            Cliente
        </label>
        {{-- <input class="form-control" type="select" name="producto_id" id="producto_id" value="{{ isset($pedido->producto_id) ? $pedido->producto_id: '' }}"> --}}
        <select class="form-select" name="cliente_id">
            @foreach($clientes as $id => $cliente)
                <option value="{{ $id }}">{{ $cliente }}</option>
            @endforeach
        </select>
        
    
    </div>


    

    
    <div class="form-group my-4">
        <label class="my-2" for="fecha"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/7796/7796349.png" alt=""> 
            Fecha
        </label>
        <input class="form-control" type="date" name="fecha" id="fecha" value="{{ isset($pedido->fecha) ? $pedido->fecha : '' }}">
    </div>

    <div class="form-group my-4">
        <label class="my-2" for="hora"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/709/709511.png" alt=""> 
            Hora
        </label>
        <input class="form-control" type="time" name="hora" id="hora" value="{{ isset($pedido->hora) ? $pedido->hora : '' }}">
    </div>
    
        
        <input class="btn btn-success my-4"  type="submit" value="{{$modo}} datos">
        <a class="btn btn-primary my-4 px-3" href="{{url('pedidos/')}}"> Regresar </a>
    </div>