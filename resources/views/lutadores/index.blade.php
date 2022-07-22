<x-layout title="Lutadores">
    <a href="/categorias/{{$peso}}/lutadores/create" class="btn btn-dark m-2">Adicionar</a>

    <ul class="list-group">
        @foreach($lutadores as $lutador)
        <li class="list-group-item">{{ $lutador }}</li>
        @endforeach
    </ul>
</x-layout>