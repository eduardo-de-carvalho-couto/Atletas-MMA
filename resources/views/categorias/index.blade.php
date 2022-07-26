<x-layout title="Categorias">

    
    <div class="container text-center">
      <div class="row">
        
        @foreach ($categorias as $categoria)
          <div class="col-12 col-md-3">
            <a href="/categorias/{{$categoria->id}}/lutadores"> {{ $categoria->peso }} </a>
          </div>    
        @endforeach
        
      </div>
    </div>
      
</x-layout>