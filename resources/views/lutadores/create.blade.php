<x-layout title="Novo lutador">
    <x-lutadores.form :action="route('categorias.lutadores.store', $categoria)" :nome="old('nome')" :posicao="old('posicao')" :update="false"/>
</x-layout>