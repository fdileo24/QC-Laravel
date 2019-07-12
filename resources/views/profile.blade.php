@extends('layouts.main')
@section('content')
<div class="containPerfil">
        <section class="row  text-center ">
          <article class="perfil col-12 " > 
             <div class=" avatarShape text-center">
             @if($user->avatar == null || empty($user->avatar))
                <img class="avatarShape" class="rounded" src={{ URL::asset('storage\avatars\4KJ8v0PquDfBgsKZfcA6xCoomLzHf3pt2xGxBpB0.jpeg') }} alt="Avatar" >
             @else
                <img class="avatarShape" class="rounded" src={{ URL::asset($user->avatar)}} alt="Avatar" >
            @endif 
             </div>
               <br>
               <h1 class="bienvenida" > 
                 <p>Bienvenido {{$user->name}}
                  <br>
                  Tu puntuaje actual es de {{$user->puntos}} puntos.
                 </p> 
                </h1>
          </article> 
          </section>
@endsection

