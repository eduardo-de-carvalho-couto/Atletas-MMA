<x-layout title="Categorias">
    <form action="{{ route('categorias.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="row mb-3">
            <div class="col-2">
                <label for="peso" class="form-label">Peso:</label>
                <input  type="text"
                        id="peso" 
                        name="peso" 
                        class="form-control"
                        value="{{ old('peso') }}">
            </div>

            <div class="col-10">
                <label for="capa" class="form-label">Capa:</label>
                <input  type="file"
                        id="capa" 
                        name="capa" 
                        class="form-control"
                        accept="image/gif, image/jpeg, image/png">
            </div>
        </div>
    
        <button class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>