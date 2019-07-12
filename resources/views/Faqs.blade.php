@extends('layouts.main')
@section('content')
<div class="card bg-dark text-white ">
        <img src="img/FAQfoto.jpeg" class="card-img" alt="fotodefondo">
        <div class="card-img-overlay"> 
              <h1 class="FAQ">
                  Frequently Asked 
                 <br>
                  Questions
                </h1>
    </div>
</div>
<section>
  
@foreach ($preguntas as $pregunta)

        <div class="accordion" id="accordionExample">
          <div class="card" id="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" id="btn-title" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <i class="material-icons">
                    {{$pregunta->question}}
                  </i>
                </button>
              </h2>
            </div>
    
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>{{$pregunta->answer}}</p>
              </div>
            </div>
          </div>
    
        </div>
@endforeach
</section>
@endsection