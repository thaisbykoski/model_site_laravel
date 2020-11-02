<div class="input-field">
  <input type="text" name="title" value="{{isset($record->title) ? $record->title : ''}}">
  <label for=""> Título </label>
</div>

<div class="input-field">
  <input type="text" name="description" value="{{isset($record->description) ? $record->description : ''}}">
  <label for=""> Descrição </label>
</div>

<div class="input-field">
  <input type="text" name="value" value="{{isset($record->value) ? $record->value : ''}}">
  <label for=""> Valor </label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="image"}}>
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>  
</div>
@if(isset($record->image))
<div class="input-field">
  <img width="150" src="{{asset($record->image)}}" alt="">
</div>
@endif

<div>
  <p>
    <input type="checkbox" id="test5" name="published" {{isset($record->published) && $record->published == 'yes' ? 'checked' : ''}} value ="true" />
    <label for="test5">Publicar?</label>
  </p>
  <br><br>
</div>
