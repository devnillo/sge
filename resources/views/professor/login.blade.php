<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Professor - Entrar
    </x-slot>
    <div class="main">
        <x-login title="Entrar" description="Área do Professor" >
            <x-form route='professor.login.action' method="POST">
                <x-input name="uuid" type="text" placeholder="Digite seu código"/>
                @error('uuid')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-input name="password" type="password" placeholder="Digite sua senha"/>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-button type="submit" title="Entrar"/>
            </x-form>
        </x-login>
    </div>
</x-layout>