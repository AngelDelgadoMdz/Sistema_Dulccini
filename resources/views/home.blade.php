<style>

    body{
        background-image: linear-gradient(to top, #9795f0 0%, #fbc8d4 100%);
    }

    *{
        box-sizing: border-box !important;
    }

    .mycol{
        flex: 25% !important;
        padding: 5px;
    }

    .mycol img{
        margin-top: 5px !important;
    }

    .myrow{
        display: flex !important;
        padding: 5px !important;
        flex-wrap: wrap !important;
        position: relative;
    }

    img{
        width: 100%;
    }

    @media(max-width: 600px){
        .col{
            flex: 100%;
        }
    }
    @media(max-width: 800px){
        .col{
            flex: 50%;
        }
    }

    .myheader{
        text-align: center;
        justify-content: center;
    }
    .myheader img{
        width: 300;
    }

    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    .myfont{
        font-family: 'Pacifico', cursive;
        font-size: 3em !important;
    }

    .circle {
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: #ccc;
  background-image: linear-gradient(to top, #c471f5 0%, #fa71cd 100%);
  width: 80px !important;
  height: 80px !important;
  position: relative;
  top: 50%;
  left: 50%;
  margin-top: 100px;
  transform: translate(-50%, -50%);
}

.circle img{
    width: 50px ;
    height: 50px;
}


</style>


@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Este es el home default que se crea después de agregar la autentificación en laravel
            Por eso no lo borré --}}
        {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <a href="{{url('/productos')}}"> HOla </a>

            </div>
        </div>
    </div> --}}



        <div class="wrapper">


            <div class="myheader">

                <img src="{{asset('images/logoDulccini.png')}}" alt="">
                <h1 class="myfont">Dulccini</h1>
                
                <div class="circle">
                    <a href="{{ url('/productos') }}">
                        <img src="{{asset('images/inicioBoton.png')}}" alt="">
                        </a>
                </div>

            </div>

            

            <div class="myrow">
                <div class="mycol">
                    <img class="img img-thumbnail" src="{{ asset('images/dulccini1.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini2.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini3.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini4.jpeg') }}">
                </div>
                <div class="mycol">
                    <img class="img img-thumbnail" src="{{ asset('images/dulccini5.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini6.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini7.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini8.jpeg') }}">
                </div>
                <div class="mycol">
                    <img class="img img-thumbnail" src="{{ asset('images/dulccini9.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini10.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini11.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini12.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini13.jpeg') }}">
                </div>
                <div class="mycol">
                    <img class="img img-thumbnail" src="{{ asset('images/dulccini14.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini15.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini16.jpeg') }}">
                <img class="img img-thumbnail" src="{{ asset('images/dulccini17.jpeg') }}">
                </div>
            </div>


        </div>
























    </div>
@endsection
