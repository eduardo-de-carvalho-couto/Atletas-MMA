<x-layout title="Novo lutador">
    <x-lutadores.form :action="route('categorias.lutadores.store', $categoria)" />
</x-layout>