<x-layout title="Novo lutador">
    <form action="/categorias/{{$categoria}}/lutadores" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-6">
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

            <div class="col-2">
                <label for="vitorias" class="form-label">Vitórias:</label>
                <input  type="text"
                        id="vitorias" 
                        name="vitorias" 
                        class="form-control"
                        value="{{ old('vitorias') }}">
            </div>

            <div class="col-2">
                <label for="derrotas" class="form-label">Derrotas:</label>
                <input  type="text"
                        id="derrotas" 
                        name="derrotas" 
                        class="form-control"
                        value="{{ old('derrotas') }}">
            </div>
        </div>

        <button class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>