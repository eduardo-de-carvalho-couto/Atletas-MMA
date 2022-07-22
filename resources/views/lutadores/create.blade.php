<x-layout title="Novo lutador">
    <form action="/categorias/{{$peso}}/lutadores" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>