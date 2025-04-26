<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-header page="Área do Diretor">
        <x-slot name="page">
            Área do diretor
        </x-slot>
        <x-slot name="links">
            <li>
                <a href="">Escola</a>
            </li>
            <li>
                <a href={{ route('escola.turma.create') }}>Turmas</a>
            </li>
            <li>
                <a href="">Alunos</a>
            </li>
            <li>
                <a href="">Professores</a>
            </li>
        </x-slot>
    </x-header>
    <main class="mt-15 px-2">
        <h1 class="text-xl sm:text-3xl text-primary font-medium">{{ $escola->name }}</h1>
        @foreach ($escola->turmas as $item)
            <div class="flex gap-2">
                <h1>{{ $item->name }}</h1>
                <p>Capacidade:  {{ $item->qtd_alunos }}</p>
            </div>    
        @endforeach
    </main>
</x-layout>