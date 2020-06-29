<form method="POST" action="/processar_cotacao/{{$item->id}}">
  @csrf 
  <div>
    <button type="submit" class="btn btn-info" name="processar_cotacao" value="Em Licitação">Em Licitação</button>
    <br><br>
      <div class="form-group">
        <label for="motivo">Justificativa para negar:</label>
        <textarea class="form-control" id="motivo" rows="1" name="motivo">@if(isset($item)){{ $item->motivo }}
        @endif</textarea>
      </div>
        <button type="submit" name="processar_cotacao" class="btn btn-danger" value="Negado">Negar</button>
  </div> 
</form>