<x-layout title="Nova luta">
    <form action="{{ route('lutadores.lutas.store', $lutador) }}" method="post">
        @csrf
    
        <div class="row d-flex justify-content-center mt-3 mb-3">
            <div class="col-2">
                <label for="data" class="form-label d-flex justify-content-center">Data da luta:</label>
                <input  type="text"
                        id="data" 
                        name="data" 
                        class="form-control"
                        @isset($data)value="{{$data}}"@endisset>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5 mb-5" >
            <div class="col-8 d-grid">

                <div class="d-flex justify-content-center">
                    <label class="mb-2">Adversário:</label>
                </div>

                @foreach ($adversarios as $adversario)
                    <input type="radio" class="btn-check" name="adversario" id="adversario-{{ $adversario->id }}" autocomplete="off" value="{{ $adversario->id }}">
                    <label class="btn btn-outline-dark" for="adversario-{{ $adversario->id }}">{{ $adversario->nome }}</label>
                @endforeach
            </div>           
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <div class="d-flex justify-content-center">
                    <label class="mb-2">Resultado:</label>
                </div>

                <div class="d-flex justify-content-center">
                    <input type="radio" class="btn-check" name="resultado" id="success-outlined" autocomplete="off" value="{{ $lutador->id }}" checked>
                    <label class="btn btn-outline-dark" for="success-outlined">Vitória</label>

                    <input type="radio" class="btn-check" name="resultado" id="danger-outlined" autocomplete="off" value="{{ $adversario->id }}">
                    <label class="btn btn-outline-dark" for="danger-outlined">Derrota</label>
                </div>

            </div>
        </div>
    
        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-dark">Adicionar luta</button>
        </div>
    </form>
</x-layout>