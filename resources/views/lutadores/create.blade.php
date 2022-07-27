<x-layout title="Novo lutador">
    <form action="/categorias/{{$categoria}}/lutadores" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-10">
                <label for="nome" class="form-label">Nome:</label>
                <input  type="text"
                        id="nome" 
                        name="nome" 
                        class="form-control"
                        value="{{ old('nome') }}">

                <input  type="hidden" 
                        id="categoria" 
                        name="categoria" 
                        class="form-control" 
                        value="{{$categoria}}">
            </div>

            <div class="col-2">
                <label for="posicao" class="form-label">Posição no ranking:</label>
                <input  type="text"
                        id="posicao" 
                        name="posicao" 
                        class="form-control"
                        value="{{ old('posicao') }}">
            </div>
        </div>

        <button class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>