
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


<div class="container-fluid mx-auto w-75 myform p-5">
<h1 id="titulo" class="text-center myfont"> 
    {{$modo}} producto 
</h1>

<div class="form-group my-3">
    <label class="my-2" for="nombre"> 
        <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/7387/7387315.png" alt=""> 
        Nombre del producto 
    </label>
    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre: '' }}">
</div>

<div class="form-group my-3">
    <label class="my-2" for="descripcion"> 
        <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/3793/3793688.png" alt=""> 
        Descripción del producto 
    </label>
    <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{ isset($producto->descripcion) ? $producto->descripcion : '' }}">
</div>

<div class="form-group my-3">
    <label class="my-2" for="precio"> 
        <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/3037/3037156.png" alt=""> 
        Precio
    </label>
    <input class="form-control" type="text" name="precio" id="precio" value="{{ isset($producto->precio) ? $producto->precio : '' }}">
</div>

<div class="form-group my-3">
    <label class="my-2" for="foto"> 
        <img class="icono-label" src="https://cdn-icons-png.flaticon.com/512/570/570991.png" alt=""> 
        Foto
    </label>
    @if(isset($producto->foto))
    <img class="img-thumbnail img-fluid m-3" src="{{asset('storage').'/'.$producto->foto}}" alt="" width="100">
    @endif
    <input class="form-control" type="file" name="foto" id="foto" >
</div>

    
    <input class="btn btn-success my-4"  type="submit" value="{{$modo}} datos">
    <a class="btn btn-primary my-4 px-3" href="{{url('productos/')}}"> Regresar </a>
</div>