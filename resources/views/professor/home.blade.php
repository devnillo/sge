<x-layout>
    <x-header page="Área do Professor">
        {{-- <x-slot name="page">
            Área do diretor
        </x-slot> --}}
        <x-slot name="links">
            <li>
                <a href="">Escola</a>
            </li>
            <li>
                <a href="">Alunos</a>
            </li>
            <li>
                <a href="">Professores</a>
            </li>
        </x-slot>
    </x-header>
    <x-slot name="title">Professor - Home</x-slot>
    {{ Auth::user()->name }}
</x-layout>