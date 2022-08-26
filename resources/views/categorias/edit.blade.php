<x-layout title="Editar categoria">
    <x-categorias.form :action="route('categorias.update', $categoria->id)" :peso="$categoria->peso" :update="true" />
</x-layout>