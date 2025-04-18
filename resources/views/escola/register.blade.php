<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Criar Escola
    </x-slot>
    <div class="main w-full">
        <x-login title="Registrar Escola" description=' '>            
            <form action={{ route("escola.register.store") }} method="POST">
                @csrf
                <x-input name="name" type="text" placeholder="Nome da Escola"/>
                @error('name')
                <p class="error">{{ $message }}</p>
                @enderror
                <x-input name="email" type="text" placeholder="Email"/>
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
                <x-input name="password" type="password" placeholder="Senha" autocomplete="current-password" />
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
                <input name="admin_id" type="hidden" value={{ Auth::guard('admin')->user()->id }} />
                <x-button type="submit" title="Criar Escola"/>
            </form>
        </x-login>
    </div>
</x-layout>