<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Home - Administração
    </x-slot>
    <div class="flex flex-col gap-2">
        <header class="w-screen bg-primary h-20 shadow">
            <h1>administração</h1>
            <h1>USER: {{ auth('admin')->user()->name }}</h1>
        </header>
        <main class="px-2">
            <h2 class="text-2xl font-bold">Opções</h2>
            <div class="cards">
                <div class="card">
                    <a href={{ route('escola.register') }}>
                        Criar Escola
                    </a>
                </div>
            </div>
        </main>
    </div>
    
</x-layout>