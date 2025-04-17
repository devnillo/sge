<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Entrar Secretaria
    </x-slot>
    <div class="main">
        <x-login title="Área da administração" description='Sistema de Gestão Escolar'>
            
            <x-form route="admin.login.store" method="POST">
                <x-input name="email" type="email" placeholder="Email"/>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-input name="password" type="password" placeholder="Senha" autocomplete="current-password"/>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                <a href={{ route('admin.login') }} class="text-start text-primary w-full">Esqueceu a senha?</a>
                <x-button type="submit" title="Entrar"/>
            </x-form>
        </x-login>
    </div>
</x-layout>