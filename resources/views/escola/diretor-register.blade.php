<x-layout>
    <x-slot name="title">
        Diretor Register
    </x-slot>
    <x-header>
        <x-slot name="page">
            Adicionar Diretor
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
    <main class="pt-15 px-2">
        <h1 class="text-3xl font-medium">Registrar Diretor</h1>
        <span class="text-2xl text-primary">{{ $escola->name }}</span>
        <form action={{ route('escola.diretor.action', $escola->id) }} method="POST" class="flex flex-col items-center justify-center gap-2 w-2/4 m-auto">
            @csrf
            <x-input name="name" type="text" placeholder="Digite seu nome" />
            <x-input name="email" type="text" placeholder="Digite seu email" />
            <x-input name="password" type="password" placeholder="Digite sua senha" />
            <input type="hidden" name="escola_id" value="{{ $escola->id }}"/>
            <x-button type="submit" title="Registrar"/>
        </form>
    </main>
</x-layout>