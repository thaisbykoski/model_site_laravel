@extends('layout.site')

@section('title', 'Cursos')

@section('content')

  <div class="container">

    <h3 class="center"> Editando Curso </h3>

    <div class="row">

      <form class="" action="{{route('admin.cursos.atualizar',$record->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="put">
        @include('admin.courses._form')

        <button class="btn deep-orange"> Atualizar </button>
      </form>
    </div>
  </div>

@endsection