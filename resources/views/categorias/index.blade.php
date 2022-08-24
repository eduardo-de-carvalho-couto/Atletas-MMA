<x-layout title="Categorias">

    
    <div class="container text-center">
      <div class="row">
        
        @foreach ($categorias as $categoria)
          <div class="col-12 col-md-3">
            <img src="{{ asset('storage/'. $categoria->capa) }}" width="290" alt="" class="img-thambnail">
            <a href="{{ route('categorias.lutadores.index', $categoria->id) }}"> {{ $categoria->peso }} </a>
          </div>    
        @endforeach
        
      </div>
    </div>
      
</x-layout>