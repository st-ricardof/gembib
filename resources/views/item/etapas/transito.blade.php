<form method="POST" action="/processar_processamento/{{$item->id}}">
    @csrf 
    <div>
        <p>Enviado para {{$item->status}} por {{ $item->alterado_por }} em {{$item->updated_at}}.</p>
        @include('item.observacao')
        <button type="submit" name="processar_processamento" class="btn btn-info" value="Em Processamento Técnico" onclick="return confirm('Mudar status para Em Processamento Técnico?')">Dar entrada ao Processamento Técnico</button>
    </div>
</form>