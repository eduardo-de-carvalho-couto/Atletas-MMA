<x-layout title="Criar categoria">
    <x-categorias.form :action="route('categorias.store')" :peso="old('peso')" :update="false" />
</x-layout>