
<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Entrar Secretaria
    </x-slot>
    <div class="main">

        <div class="content">
            <h2 class="text-2xl font-bold text-center">Entrar Secretaria</h2>
            <form action={{ route('admin.login.store') }} method="POST">
                @csrf
                <br>
                <label for="email" class="label text-xl mr-auto">Email: </label>
                <input type="email" name="email" id="email">
                <br>
                <label for="password" class="label text-xl mr-auto">Senha:</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" class="p-3 w-full  mr-auto rounded text-xl md:w-1/3">Entrar</button>
            </form>
        </div>
    </div>
</x-layout>