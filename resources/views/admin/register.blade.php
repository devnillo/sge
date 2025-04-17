<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Entrar Secretaria
    </x-slot>
    <div class="main">
        <x-login title="Criar Secretária" description='Sistema de Gestão Escolar'>
            
            <x-form route="admin.register.store" method="POST">
                <x-input name="name" type="text" placeholder="Nome da secretária"/>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-input name="email" type="text" placeholder="Email"/>
                <x-input name="password" type="password" placeholder="Senha" autocomplete="current-password"/>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-button type="submit" title="Entrar"/>
            </x-form>
        </x-login>
    </div>
</x-layout>