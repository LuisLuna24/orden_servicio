<nav class="flex gap-3 max-md:justify-between max-md:w-full">
    <x-nav-link  href="{{route('clientes.dmuestras')}}" :active="request()->routeIs('clientes.dmuestras')" wire:navigate.hover>1.- Muestras</x-nav-link>
    <x-nav-link  href="{{route('clientes.dprocedencia')}}" :active="request()->routeIs('clientes.dprocedencia')" wire:navigate.hover>2.- Procedencia</x-nav-link>
    <x-nav-link  href="{{route('clientes.dclientes')}}" :active="request()->routeIs('clientes.dclientes')" wire:navigate.hover>3.- Datos Cliente</x-nav-link>
    <x-nav-link  href="{{route('clientes.dorden')}}" :active="request()->routeIs('clientes.dorden')" wire:navigate.hover>4.- Datos Orden</x-nav-link>
    <x-nav-link  href="{{route('clientes.verorden')}}" :active="request()->routeIs('clientes.verorden')" wire:navigate.hover>5.- Orden</x-nav-link>
</nav>