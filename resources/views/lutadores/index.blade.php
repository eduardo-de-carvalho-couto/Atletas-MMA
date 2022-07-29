<x-layout title="Lutadores">
    <a href="/categorias/{{$categoria}}/lutadores/create" class="btn btn-dark m-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach($lutadores as $lutador)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $lutador->nome }}

            <span class="d-flex">
                <a href="{{ route('categorias.lutadores.edit', ['categoria' => $categoria, 'lutador' => $lutador->id]) }}" class="btn btn-primary btn-sm">
                    E
                </a>
                
                <form action="{{ route('categorias.lutadores.destroy', ['categoria' => $categoria, 'lutador' => $lutador->id]) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </span>
        
        </li>
        @endforeach
    </ul>
</x-layout>