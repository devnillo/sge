<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Registrar Escola
    </x-slot>
    <x-header class="">
        <x-slot name="page">
            Registrar Escola
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
    <div class="content">
        <h2 class="text-2xl font-bold text-center">Registrar Escola</h2>
        <form action={{ route('escola.register.store') }} method="POST">
            @csrf
            
                <div class="div w-full">
                    <label for="name" class="label text-xl mr-auto">Nome da Escola: </label>
                    <input type="text" name="name" id="name">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="div w-full">
                    <label for="email" class="label text-xl mr-auto">Email: </label>
                    <input type="email" name="email" id="email">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="div w-full">
                    <label for="password" class="label text-xl mr-auto">Senha:</label>
                    <input type="password" name="password" id="password">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            
                <button type="submit" class="p-3 w-full  mr-auto rounded text-xl md:w-1/3">Registrar</button>
            
            <input type="text" name="admin_id" hidden value={{ Auth::guard('admin')->user()->id }}>
        </form>
    </div>
</x-layout>