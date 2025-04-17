@props(['route'])
<form {{ $attributes }} class="flex flex-col items-center justify-center gap-2">
    @csrf
    {{ $slot }}
</form>