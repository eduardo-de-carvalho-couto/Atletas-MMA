<x-layout title="Categorias">
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria['peso'] }}</li>
        @endforeach
    </ul>
</x-layout>