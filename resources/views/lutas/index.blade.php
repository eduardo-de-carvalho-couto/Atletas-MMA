<x-layout title="Lutas">
    <a href="{{ route('lutadores.lutas.create', $lutador) }}" class="btn btn-dark m-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @if (!empty($lutasComAdversarios))
            @foreach($lutasComAdversarios as $lutaId => $lutaComAdversario)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <span class="d-flex">
                        {{ $lutador->nome }}
                    </span>   

                    <span class="d-flex align-items-center">

                        {{ $lutaComAdversario }}
                        
                        <form action="{{ route('lutadores.lutas.update', ['lutador' => $lutador->id, 'luta' => $lutaId]) }}" method="post" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                X
                            </button>
                        </form>
                    </span>
                
                </li>
            @endforeach
        @endif
    </ul>
    
</x-layout>