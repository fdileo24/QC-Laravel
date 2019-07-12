@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card bg-dark text-white ">
        <img src="img/inicio.jpg" class="fotoinicio  iniciocard  card-img" alt="fotodefondo">
    <div class="card-img-overlay">
        <div class="titulo">
            <h5 class="card-title tituloQC">Queer Cheer</h5>  
            <p class="about">
                Preparate para juegar Queer Cheer, juego
                <br>
                de preguntas y respuestas, basadas en la cultura queer.
                <br>
                Desde música, teatro, política y más! Listo para jugar?
                </p>
            <p>
        <a href="login.php"><button type="button" class="juguemos btn btn btn-primary btn-lg btn-info">JUGUEMOS</button></a> 
            </p>  
        </div>
        </div>
    </div>
    <div class="card bg-dark text-white ">
        <img src="img/inicio2.jpg" class="fotoinicio card-img" alt="fotodefondo">
        <div class="card-img-overlay">
            <div class="row">
            <div class="d-none d-sm-block col-sm-6 col-md-12 about"> 
                <br>
                <section>
                <article>
                    <h5 class="tituloabout">
                    Nuestra Historia!
                    </h5>
                    <p class="about">
                    Somos un grupo de desarrolladores que crearon Queer Cheer, juego
                    <br>
                    de preguntas y respuestas, basadas en la cultura queer.
                    <br>
                    Preguntas desde música, teatro, política y más! Listo para que juegues con tus amigos o solo!
                    </p>
                    <hr>
                    </article> 
                    </div>
                
                    <div class="col-12 col-sm-6 col-md-12 about"> 
                    <article>
                    <h5 class="tituloabout">
                    Comparte tu experiencia!
                    </h5>
                    <p class="about2">
                    Puedes subir tu video jugando a las redes sociales etiquetandonos a <a href="{{ url('/Game') }}"> @QueerCheer </a> !
                    <br>
                    Compartiremos los más divertidos!
                    </p>        
                    <hr>
            </div>
            </article> 
            </section>
        </div>
    </div> 
</div>   
@endsection