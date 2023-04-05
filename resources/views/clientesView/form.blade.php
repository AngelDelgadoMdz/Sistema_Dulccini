
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
    <h1 class="myfont text-center"> {{$modo}} cliente </h1>
    
    
    <div class="form-group my-4">
        <label class="my-2" for="nombre"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/10164/10164370.png" alt=""> 
            Nombre del cliente 
        </label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($cliente->nombre) ? $cliente->nombre: '' }}">
    </div>
    
    <div class="form-group my-4">
        <label class="my-2" for="direccion"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/446/446075.png" alt=""> 
            Dirección de entrega 
        </label>
        <input class="form-control" type="text" name="direccion" id="direccion" value="{{ isset($cliente->direccion) ? $cliente->direccion : '' }}">
    </div>
    
    <div class="form-group my-4">
        <label class="my-2" for="telefono"> 
            <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/159/159832.png" alt=""> 
            Teléfono
        </label>
        <input class="form-control" type="text" name="telefono" id="telefono" value="{{ isset($cliente->telefono) ? $cliente->telefono : '' }}">
    </div>
    
        
        <input class="btn btn-success my-4"  type="submit" value="{{$modo}} datos">
        <a class="btn btn-primary my-4 px-3" href="{{url('clientes/')}}"> Regresar </a>
    </div>