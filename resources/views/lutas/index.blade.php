<x-layout title="Lutas">
    <a href="{{ route('lutadores.lutas.create', $lutador) }}" class="btn btn-dark m-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach($lutas as $luta)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                {{ $luta->id }} - {{ $lutador->nome }} -- 
            
            </li>
        @endforeach
    </ul>
    
</x-layout>