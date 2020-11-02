@extends('layout.site')

@section('title', 'Cursos')

@section('content')

<h3 class="center"> {{$course->title}} </h3>

<div class="row">
    @foreach ($courses as $course)
      <div class="col s12 m4">
        <div class="card-panel hoverable">
          <div class="card-image" align="center">
            <img class="align-center" width="100" height="60" src="{{asset($course->image)}}">
          </div>
          <div class="card-content" style="height:170px;">
            <h4> {{$course->title}} </h4>
            <p>{{$course->description}}</p>
          </div>
          <div class="card-action">
            <a href="{{ route('admin.cursos.detail') }}">Ver mais...</a>
        </div>
        </div>
      </div>
    @endforeach
    
  </div>




@endsection
