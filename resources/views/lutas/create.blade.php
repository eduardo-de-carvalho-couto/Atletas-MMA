<x-layout title="Nova luta">
    <form action="{{ route('lutadores.lutas.store', $lutador) }}" method="post">
        @csrf
    
        <div class="row mt-3 mb-3">
            <div class="col-2">
                <label for="date" class="form-label">Data da luta:</label>
                <input  type="text"
                        id="date" 
                        name="date" 
                        class="form-control"
                        @isset($data)value="{{$data}}"@endisset>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div>
                    <label class="mb-2">Venceu?</label>
                </div>

                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                <label class="btn btn-outline-success" for="success-outlined">Sim</label>

                <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-danger" for="danger-outlined">Não</label>

            </div>
        </div>
    
    </form>
</x-layout>