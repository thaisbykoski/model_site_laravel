@extends('layout.site')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js" data-auto-a11y="true"></script>
<script>
    $(function(){
        $("#btn-mensagem").click(function(){
            $("#modal-message").modal();
        });
    });

</script>


@section('title', 'Cursos')

@section('content')

  <div class="container">

    <h3 class="center lighten-4"> Lista de Cursos </h3>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($records as $record)
            <tr>
              <td> {{ $record->id }} </td>
              <td> {{ $record->title }} </td>
              <td> {{ $record->description }} </td>
              <td> <img height="60" width="120" src="{{asset($record->image)}}" alt="{{ $record->title }}"> </td>
              <td> {{ $record->published }} </td>
              <td>
              <a class="btn green" href="{{ route('admin.cursos.editar',$record->id) }}">Editar</a>
              <a class="btn red" href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este registro?'))location.href='{{ route('admin.cursos.deletar',$record->id) }}'">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
    <a class="btn" style="background-color: #0c1d50; color: white;" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
    </div>

  </div>



@endsection