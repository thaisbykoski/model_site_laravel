@extends('layout.site')

@section('title', 'Cursos')

@section('content')

  <div class="container">

    <h3 class="center"> Entrar </h3>

    <div class="row">

      <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="text" name="email">
          <label> E-mail </label>
        </div>

        <div class="input-field">
          <input type="password" name="password">
          <label> Senha </label>
        </div>

        <button class="btn deep-orange"> Entrar </button>
      </form>
    </div>
  </div>

@endsection