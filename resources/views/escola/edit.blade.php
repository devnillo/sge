<x-layout>
    <x-slot name="title">
        Escola
    </x-slot>
    <x-header>
        <x-slot name="page">
            Editar Escola
        </x-slot>
        <x-slot name="links">
            <li>
                <a href={{ route('admin.home') }}>Home</a>
            </li>
            <li>
                <a href={{ route('professor.register') }}>Professores</a>
            </li>
        </x-slot>
    </x-header>
    <main class="p-4 mt-15">
        <h1 class="text-3xl font-medium text-primary">{{ $escola->name }}</h1>
        <div class="cards mx-auto py-4 w-[95%] text-black gap-4 rounded-md font-medium">
            {{-- <div class="data flex flex-col">
                <span class="text-3xl mb-2">Escola</span>
                <span class="">Nome: {{ $escola->name }}</span>
                <span class="">Email: {{ $escola->email }}</span>
            </div>
            <div>
                <div class="data flex flex-col">
                    @if($escola->diretor)
                        <span class="text-3xl mb-2">Diretor</span>
                        <span>Nome: {{ $escola->diretor->name }}</span>
                        <span>Email: {{ $escola->diretor->email }}</span>
                    @endif
                 </div>
            </div> --}}
            <div class="card">
                <span class="title">5</span>
                <span>ALUNOS</span>
            </div>
            <div class="card">
                <span class="title">5</span>
                <span>PROFESSORES</span>
            </div>
            <div class="card">
                <span class="title">5</span>
                <span>MÁTRICULAS</span>
            </div>
            <div class="card">
                <span class="title">5</span>
                <span>TRANSFERÊNCIAS</span>
            </div>
        </div>
        <div class="w-full p-2">
            <div class="diretor-area flex flex-col gap-2">
                <h3 class="text-2xl font-medium">Diretor (es):</h3>
                @if (count($escola->diretor))
                    
                    @foreach ($escola->diretor as $item)
                    <div class="diretor flex justify-between items-center bg-white py-2 px-1 rounded-md border-2 border-gray-300">
                        <p class="text-xl ml-2">{{ ucfirst($item->name) }}</p>
                        <div class="options text-white text-md">
                            <button>
                                <a href="" class="bg-blue-500 p-2 rounded-md">Editar</a>
                            </button>
                            <button>
                                <a href="" class="bg-red-500 p-2 rounded-md">Excluir</a>
                            </button>
                        </div>
                    </div>
                    @endforeach
                        @else
                        <div class="diretor flex justify-between items-center bg-white py-2 px-1 rounded-md border-2 border-gray-300">
                            <p class="text-xl ml-2">Sem Diretor</p>
                        </div>
                @endif
                @if (count($escola->diretor) <= 2)
                <a class="bg-green-500 p-2 w-full sm:w-2/4 md:w-1/3 rounded-md text-white font-medium text-center" href={{ route('escola.diretor.register', $escola->id) }}>Adicionar</a>
                    
                @endif
            </div>
        </div>
    </main>
</x-layout>