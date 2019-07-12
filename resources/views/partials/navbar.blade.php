<div class ="contianer fluid">
<nav class="estilonav  navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand logo_" href="{{ url('/') }}">QC!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ url('/Faqs') }}">FAQ</a> 
        </li>
        @if(Auth::guest())
          <li class="nav-item active">
              <a class="nav-link" href="{{ url('/login') }}">Login<span class="sr-only">(current)</span></a> 
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="{{ url('/register') }}">Registrate</a>  
          </li>

        @else
          <li class="nav-item ">
              <a class="nav-link" href="{{ url('/Game') }}">Juguemos!</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/Profile') }}">Perfil</a>            
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>            
            </li>
        @endif
      </ul>
    </div>
  </nav>
</div>

  