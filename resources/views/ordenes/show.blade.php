<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Orden de servicio') }}
            </h2>
            <x-button-routing href="{{ route('ordenes.index') }}" wire:navigate.hover><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-corner-down-left-double">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19 5v6a3 3 0 0 1 -3 3h-7" />
                    <path d="M13 10l-4 4l4 4m-5 -8l-4 4l4 4" />
                </svg> regresar</x-button-routing>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-10">
                @livewire('ordenes.show')
            </div>
        </div>
    </div>
</x-app-layout>
