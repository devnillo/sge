<x-layout>
    {{-- @vite('resources/views/admin/style.css') --}}
    <x-slot name="title">
        Home - Administração
    </x-slot>
    <div class="flex flex-col gap-2">
        <x-header class="w-screen bg-primary h-20 shadow">
            <x-slot name="page">
                Administração
            </x-slot>
            <x-slot name="links">
                <li>
                    <a href={{ route('admin.home') }}>Home</a>
                </li>
                <li class="">
                    <form action={{ route('logout') }} method="post">
                        @csrf
                        <button type="submit">Sair</button>
                    </form>
                </li>
            </x-slot>

            <h1>USER: {{ auth('admin')->user()->name }}</h1>
        </x-header>
        <main class="px-2 w-screen flex flex-col gap-2">
            <h2 class="text-2xl font-bold mb-4">Escolas</h2>
            @foreach ($escolas as $escola)
                <div class="flex items-center justify-between gap-2 bg-white p-4 w-3/4 m-auto rounded-md font-semibold">
                    {{-- <h1>{{ ucfirst($escola->name)}} - {{ $escola->diretor->name }} - </h1> --}}
                    <div class="data flex items-end gap-2">
                        <span class="text-xl">{{ $escola->name }}</span>
                        @if ($escola->diretor?->name)
                            <span>{{ $escola->diretor->name }}</span>
                        @endif
                    </div>
                    <div class="options">
                        @can(Auth::guard('admin')->user()->isAdmin)
                            <a href='{{ route('escola.edit', $escola->id) }}' class="bg-yellow-500 text-white p-2">Gerenciar</a>
                        @endcan
                        @can(Auth::guard('admin')->user()->isAdmin)
                            <a href='{{ route('escola.diretor.register', $escola->id) }}' class="bg-red-500 text-white p-2">Excluir</a>
                        @endcan
                    </div>
                </div>
            @endforeach
        </main>
    </div>
    
</x-layout>