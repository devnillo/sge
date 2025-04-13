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
        <main class="px-2 w-screen">
            <h2 class="text-2xl font-bold mb-4">Opções</h2>
            <div class="cards ">
                <div class="card">
                    <a href={{ route('escola.register') }}>
                        Dashboard
                    </a>
                </div>
                <div class="card">
                    <a href={{ route('escola.home') }}>
                        Escolas
                    </a>
                </div>
                <div class="card">
                    <a href={{ route('escola.register') }}>
                        Educasenso
                    </a>
                </div>
            </div>
        </main>
    </div>
    
</x-layout>