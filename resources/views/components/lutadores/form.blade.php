<form action="{{ $action }}" method="post">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset

    <div class="row mb-3">
        <div class="col-10">
            <label for="nome" class="form-label">Nome:</label>
            <input  type="text"
                    id="nome" 
                    name="nome" 
                    class="form-control"
                    @isset($nome)value="{{$nome}}"@endisset>
        </div>

        <div class="col-2">
            <label for="posicao" class="form-label">Posição no ranking:</label>
            <input  type="text"
                    id="posicao" 
                    name="posicao" 
                    class="form-control"
                    @isset($posicao)value="{{$posicao}}"@endisset>
        </div>
    </div>

    <button class="btn btn-dark">Adicionar</button>
</form>