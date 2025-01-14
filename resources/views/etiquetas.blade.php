@extends('laravel-usp-theme::master')

@section('content')
@include('flash')

<form method="POST" action="/etiquetas">
    @csrf

    <h4>Etiquetas</h4><br>
    <div class="row">
      <div class="col-sm form-group">
        <label for="tombo_inicio">Tombo início:</label>
        <input type="text" id="tombo_inicio" class="form-control" name="tombo_inicio" value="{{old('tombo_inicio')}}"/>
      </div>
      <div class="col-sm form-group">
        <label for="tombo_fim">Tombo fim:</label>
        <input type="text" id="tombo_fim" class="form-control" name="tombo_fim" value="{{old('tombo_fim')}}"/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm form-group">
        <label for="cod_impressao">Código de impressão:</label>
        <input type="text" id="cod_impressao" style="width: 740px" class="form-control" name="cod_impressao"/>
      </div>
    </div>
  <br>
    <div class= "row">
      <div class="col-sm-2">
        <button name="etiqueta" type="submit" class="btn btn-success" value="tombo"> Etiqueta de Tombo </button>
      </div>
      <div class="col-sm-2">
        <button name="etiqueta" type="submit" class="btn btn-success" value="lombada"> Etiqueta de Lombada </button>
      </div>
    </div>
  </div>
</form>


@endsection
