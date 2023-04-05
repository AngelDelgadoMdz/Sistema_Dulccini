<style>

    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    .bg-dulccini{
        /* background-color: #e5d8ef; */
        background-image: linear-gradient(-225deg, #e5d8ef 0%, #A8BFFF  100%);
        
    }

    .logo-title{
        font-family: 'Pacifico', cursive;
        font-size: 2.5em !important;
    }

    ul{
      margin-left: auto !important;
    }

    li{

    }

    .txt-dulccini{
        font-family: 'Pacifico', cursive;
        font-size: 1.5em;
    }


    .navbar-nav .nav-link {
  font-size: 1em;
  transition: transform 0.3s ease;
}

/* animación para los botones de la barra de navegación */
.navbar-nav .nav-link:hover, .navbar-nav .nav-link:focus {
  transform: scale(1.2);
}

.navbar-nav .nav-link.active {
  font-weight: bold;
}

a:nth-child(1){
  margin-right: 0.5em;
}



</style>




<nav id="myheader" class="navbar navbar-expand-lg bg-dulccini">
    
    <a class="navbar-brand logo-title" href="{{url('/home')}}"> 
        <img src="{{ asset('images/logoDulccini.png') }}" width="150" alt="">
        Dulccini
    </a>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}

    <div class="collapse navbar-collapse ml-auto" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item active txt-dulccini px-1">
          <a class="nav-link btn btn-light" href="{{url('/productos')}}"> <img src="https://cdn-icons-png.flaticon.com/512/1784/1784121.png" width="30" alt=""> Productos</a>
        </li>
        <li class="nav-item txt-dulccini px-1">
          <a class="nav-link btn btn-light" href="{{url('/clientes')}}"> <img src="https://cdn-icons-png.flaticon.com/512/1605/1605350.png" width="30" alt=""> Clientes</a>
        </li>
        <li class="nav-item txt-dulccini px-1">
          <a class="nav-link btn btn-light" href="{{url('/pedidos')}}"> <img src="https://cdn-icons-png.flaticon.com/512/3246/3246812.png" width="30" alt=""> Pedidos</a>
        </li>
      </ul>

    </div>



  </nav>

  