<x-layout title="Lutadores">
    <a href="/categorias/{{$categoria}}/lutadores/create" class="btn btn-dark m-2">Adicionar</a>

    <ul class="list-group">
        @foreach($lutadores as $lutador)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $lutador->nome }}

            <form action="{{ route('lutadores.destroy', ['categoria' => $categoria, 'lutador' => $lutador]) }}" method="post">
                @csrf
                @method('DELETE')

                <input  type="hidden" 
                        id="categoria" 
                        name="categoria" 
                        class="form-control" 
                        value="{{$categoria}}">

                <button class="btn btn-danger btn-sm">
                    X
                </button>
            </form>
        
        </li>
        @endforeach
    </ul>
</x-layout>