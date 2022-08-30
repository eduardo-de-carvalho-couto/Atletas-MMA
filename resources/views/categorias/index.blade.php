<x-layout title="Categorias">

  @auth
  <a href="{{ route('categorias.create') }}" class="btn btn-dark m-2">Adicionar</a>
  @endauth

  @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
  @endisset
    
  <div class="container text-center">

    <div class="row">
      
      @foreach ($categorias as $categoria)
        <div class="col-12 col-md-3">
          <img src="{{ asset('storage/'. $categoria->capa) }}" width="270" alt="" style="height: 290px;">
          <span class="d-flex align-items-center justify-content-center">
            <a href="{{ route('categorias.lutadores.index', $categoria->id) }}"> 
              {{ $categoria->peso }} 
            </a>

            @auth
            <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-primary btn-sm ms-2">
                E
            </a>
            
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    X
                </button>
            </form>
            @endauth
          </span>
        </div> 
      @endforeach
      
    </div>
  </div>
      
</x-layout>