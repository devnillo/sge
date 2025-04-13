<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Escolas
    </x-slot>
    <x-header>
        <x-slot name="page">
            Escolas
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
    </x-header>
    <main class="px-2 w-screen">
        <h2 class="text-2xl font-bold mb-4 pt-2">Opções</h2>
        <div class="cards ">
            <div class="card">
                <a href={{ route('escola.register') }}>
                    Criar Escola
                </a>
            </div>
            <div class="card">
                <a href={{ route('escola.lista') }}>
                    Escolas
                </a>
            </div>
                {{-- <div class="card">
                    <a href={{ route('escola.register') }}>
                        Educasenso
                    </a>
                </div> --}}
        </div>
    </main>
</x-layout>