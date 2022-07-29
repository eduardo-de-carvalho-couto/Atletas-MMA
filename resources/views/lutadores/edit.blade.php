<x-layout title="Editar lutador '{{ $lutador->nome }}'">
    <x-lutadores.form :action="route('categorias.lutadores.update', ['categoria' => $categoria, 'lutador' => $lutador->id])" :nome="$lutador->nome" :posicao="$lutador->posicao" :update="true" />
</x-layout>