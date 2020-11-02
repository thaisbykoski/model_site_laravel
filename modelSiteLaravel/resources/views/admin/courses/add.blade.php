@extends('layout.site')

@section('title', 'Cursos')

@section('content')

  <div class="container">

    <h3 class="center"> Adicionar Curso </h3>

    <div class="row">

      <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        @include('admin.courses._form')

        <button class="btn deep-orange"> Salvar </button>
      </form>
    </div>
  </div>

@endsection