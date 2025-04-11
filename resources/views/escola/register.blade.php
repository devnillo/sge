<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Registrar Escola
    </x-slot>
    <div class="content w-full md:w-2/4 m-auto bg-white p-5 space-y-4 rounded-md">
        <h2 class="text-2xl font-bold text-center">Registrar Escola</h2>
        <form action={{ route('escola.register.store') }} method="POST">
            @csrf
            <label for="name" class="label text-xl mr-auto">Nome da Escola: </label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email" class="label text-xl mr-auto">Email: </label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password" class="label text-xl mr-auto">Senha:</label>
            <input type="password" name="password" id="password">
            <input type="text" name="admin_id" hidden value={{ Auth::guard('admin')->user()->id }}>
            <br>
            <button type="submit" class="p-3 w-full  mr-auto rounded text-xl md:w-1/3">Registrar</button>
        </form>
    </div>
</x-layout>