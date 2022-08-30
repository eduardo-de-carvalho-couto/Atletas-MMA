<x-layout title="Lutas">
    @auth
    <a href="{{ route('lutadores.lutas.create', $lutador) }}" class="btn btn-dark m-2">Adicionar</a>
    @endauth

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group mb-5">
        @if (!empty($lutasComAdversarios))
            @foreach($lutasComAdversarios as $lutaId => $lutaComAdversario)
                <li class=" list-group-item 
                            d-flex 
                            justify-content-between 
                            align-items-center 
                            bg-success
                            @if($lutaComAdversario['adversario_vencedor'] == true)
                            bg-danger
                            @endif">

                    <span class="d-flex">
                        {{ $lutador->nome }}
                    </span>   

                    <span class="d-flex align-items-center">

                        {{ $lutaComAdversario['adversario'] }}
                        
                        @auth
                        <form action="{{ route('lutadores.lutas.update', ['lutador' => $lutador->id, 'luta' => $lutaId]) }}" method="post" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                X
                            </button>
                        </form>
                        @endauth
                    </span>
                
                </li>
            @endforeach
        @endif
    </ul>
    
</x-layout>