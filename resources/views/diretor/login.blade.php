
<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Entrar Secretaria
    </x-slot>
    <div class="main">
        <x-login title="Entrar" description="Área do diretor" >
            <x-form route='diretor.login.action' method="POST">
                <x-input name="email" type="text" placeholder="Digite seu email"/>
                <x-input name="password" type="password" placeholder="Digite sua senha"/>
                <x-button type="submit" title="Entrar"/>
            </x-form>
        </x-login>
    </div>
</x-layout>