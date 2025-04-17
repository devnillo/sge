<x-layout>
    {{-- @vite('resources/views/admin/style.css') --}}
    <x-slot name="title">
        Home - Administração
    </x-slot>
    {{-- <div class="flex flex-col gap-2"> --}}
        <x-header class="w-screen bg-primary h-20 shadow">
            <x-slot name="page">
                Administração
            </x-slot>
            <x-slot name="links">
                <li>
                    <a href="">Escolas</a>
                </li>
                <li>
                    <a href="">Alunos</a>
                </li>
                <li>
                    <a href={{ route('professor.register') }}>Professores</a>
                </li>
            </x-slot>

            <h1>USER: {{ auth('admin')->user()->name }}</h1>
        </x-header>
        <main class="px-2 w-screen pt-13">
            <h2 class="text-2xl font-bold mb-4">Dados</h2>
            <div class="cards ">
                <div class="card flex flex-col justify-center items-center border-2 border-gray-200 bg-white rounded-md py-3">
                    <span class="text-2xl font-semibold text-primary">30</span>
                    <span class="text-xl">ESCOLAS</span>
                </div>
                <div class="card flex flex-col justify-center items-center border-2 border-gray-200 bg-white rounded-md py-3">
                    <span class="text-2xl font-semibold text-primary">{{ number_format(5430) }}</span>
                    <span class="text-xl">ALUNOS</span>
                </div>
                <div class="card flex flex-col justify-center items-center border-2 border-gray-200 bg-white rounded-md py-3">
                    <span class="text-2xl font-semibold text-primary">76</span>
                    <span class="text-xl">PROFESSORES</span>
                </div>
            </div>
            <div class="escolas mt-5">
                <h2 class="mb-5 text-2xl font-medium">Escolas</h2>
                <div class="escolas flex flex-col gap-2">
                    @if (count($escolas) != 0)
                        
                        @foreach ($escolas as $escola)
                            <div class="flex items-center justify-between gap-2 bg-white p-4 w-full m-auto rounded-md font-semibold">
                                {{-- <h1>{{ ucfirst($escola->name)}} - {{ $escola->diretor->name }} - </h1> --}}
                                <div class="data flex flex-col sm:flex-row items-center gap-2">
                                    <span class="text-xl text-start w-full sm:w-auto">{{ $escola->name }} -</span>
                                    @if (count($escola->diretor))
                                        <span class="w-full sm:w-auto">{{ ucfirst($escola->diretor[0]->name) }}</span>
                                        @else
                                            <span class="w-full sm:w-auto">Não há diretor cadastrado</span>
                                    @endif
                                </div>
                                <div class="options">
                                    @can(Auth::guard('admin')->user()->isAdmin)
                                    <a href='{{ route('escola.edit', $escola->id) }}' class="bg-yellow-500 text-white p-2">Gerenciar</a>
                                    @endcan
                                </div>
                            </div>
                        @endforeach
                        @else
                            <a href={{ route('escola.register') }}>
                                <x-button title="CRIAR ESCOLA"/>
                            </a>
                    @endif
                </div>
            </div>
        </main>
    </div>
    
</x-layout>