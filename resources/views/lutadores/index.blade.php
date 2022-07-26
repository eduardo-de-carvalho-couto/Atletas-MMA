<x-layout title="Lutadores">
    <a href="/categorias/{{$categoria}}/lutadores/create" class="btn btn-dark m-2">Adicionar</a>

    <ul class="list-group">
        @foreach($lutadores as $lutador)
        <li class="list-group-item">{{ $lutador->nome }}</li>
        @endforeach
    </ul>
</x-layout>