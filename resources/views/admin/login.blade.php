
<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Entrar Secretaria
    </x-slot>
    <div class="main">
        <x-login>
            <h2 class="text-2xl md:text-3xl text-center mb-4 font-medium">Área da administração</h2>
            <x-slot name="form">
                <form action={{ route('admin.login.store') }} method="POST">
                    @csrf
                    <div class="w-full">
                        <label for="email" class="label text-xl mr-auto">Email: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="w-full">
                        <label for="password" class="label text-xl mr-auto">Senha:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button type="submit" class="p-3 w-full rounded text-xl md:w-1/3 mt-4">Entrar</button>
                </form>
            </x-slot>
        </x-login>
    </div>
</x-layout>