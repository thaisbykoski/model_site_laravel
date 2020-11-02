<!DOCTYPE html>
<html>
<head>

    <title> @yield('title') </title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style type="text/css">
      h3 {
        background-color: #0c1d50; 
        color: white; 
        font-size:2.8rem; 
        font-weight:300;
        padding: 10px;
      }

      .row {
        margin-top: 40px;
      }
  </style>
    
</head>

<body>

    <header>
        <nav style="background-color: #191970">
            <div class="nav-wrapper deep">
              <a href="#!" class="brand-logo"><i class="material-icons large">laptop</i>Cursos</a>
              <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                  <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                  <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                  <li><a href="{{route('contact.index')}}">Contato</a></li>
                  <li><a href="#">{{Auth::user()->name}}</a></li>
                  <li><a href="{{ route('site.login.sair')}}">Sair</a></li>
                @endif

              </ul>
              <ul class="side-nav" id="mobile">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                  <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                  <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                  <li><a href="#">{{Auth::user()->name}}</a></li>
                  <li><a href="{{ route('site.login.sair')}}">Sair</a></li>
                @endif
              </ul>
            </div>
          </nav>
    </header>