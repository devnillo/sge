<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Registrar Secretaria
    </x-slot>
    <div class="main p-2">
        <div class="content">
            <h2 class="text-2xl font-semibold text-center mb-4">Registrar Secretaria</h2>
            <form action={{ route('admin.register.store') }} method="POST" class="flex flex-col">
                @csrf
                <div class="input-area">
                    <label for="name" class="label text-xl mr-auto">Nome da Secretaria: </label>
                    <input type="text" name="name" id="name" placeholder="EX: Secretaria da educação, SEDUC">
                </div>
                <div class="input-area">
                    <label for="email" class="label text-xl mr-auto">Email: </label>
                    <input type="email" name="email" id="email" placeholder="EX: secretaria@gmail.com" autocomplete="email">
                </div>
                <div class="input-area">
                    <label for="password" class="label text-xl mr-auto">Senha:</label>
                    <input type="password" name="password" id="password" autocomplete="new-password">
                </div>
                <div class="input-area">
                    <button type="submit" class=" p-2 w-full rounded text-xl" autofocus>Registrar</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>