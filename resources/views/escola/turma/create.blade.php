<x-layout>
    <x-slot name="title">Criar turma</x-slot>
    <x-header page="Criar turma">
        <x-slot name="page">
            Criar turma
        </x-slot>
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
    <div class="main">
        <x-register title="Criar Turma" description="Preencha os campos abaixo para criar uma nova turma." class="mt-10">
            <form action="{{ route('escola.turma.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="escola" class="text-sm font-medium text-gray-700">Nome da escola</label>
                    <select type="text" name="escola_id" id="escola" placeholder="ex: escola municipal padre luiz" class="w-full my-1 border border-gray-200 focus:border-primary focus:outline-0 p-2 rounded-sm">
                        @foreach ($escolas as $escola)
                            <option value="{{ $escola->id }}">{{ $escola->id }} - {{ $escola->name }}</option>
                        @endforeach
                    </select>
                    @error('escola')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-sm font-medium text-gray-700">Nome da turma</label>
                    <x-input type="text" name="turma" id="name" placeholder="ex: 1º ano do ensino fundamental" />
                    @error('turma')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="serie" class="text-sm font-medium text-gray-700">Série</label>
                    <x-input type="number" name="serie" id="serie" />
                    @error('serie')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="qtd_alunos" class="text-sm font-medium text-gray-700">Capacidade de Alunos:</label>
                    <x-input type="number" name="qtd_alunos" id="qtd_alunos" />
                    @error('qtd_alunos')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Criar turma</button>
            </form>
        </x-register>
    </div>

</x-layout>