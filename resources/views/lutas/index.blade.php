<x-layout title="Lutas">
    <a href="{{ route('lutadores.lutas.create', $lutador) }}" class="btn btn-dark m-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @if (!empty($adversarios))
            @foreach($adversarios as $adversario)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    {{ $lutador->nome }} -- {{ $adversario }}
                
                </li>
            @endforeach
        @endif
    </ul>
    
</x-layout>