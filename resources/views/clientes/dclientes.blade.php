<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Datos del cliente') }}
            </h2>
            <x-button-routing href="{{route('clientes.index')}}" wire:navigate.hover>Cancelar</x-button-routing>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-nav-orden/>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-10">
                <div>
                    <div>
                        <div class="mb-5">{{---------------------------------------------------------------------------Datos del Cliene--}}
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ __('Datos del Cliente') }}
                            </h2>
                            <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Razon Social:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Regimen Fiscal</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">CFDI:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Tipo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Calle:</label>
                                <x-input type="text" />
                            </div>
                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No.Exterior:</label>
                                    <x-input type="text" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No. Interior:</label>
                                    <x-input type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Cdogo Postal:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Colonia:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Municipio:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Estado:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-10 mb-5">{{---------------------------------------------------------------------------Datos del Interesado--}}
                            <div class="flex justify-between text-black dark:text-white">
                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                    {{ __('Datos del Ineresado') }}
                                </h2>
                                <div>
                                    <x-input type="checkbox" />
                                    <label for="">Es igual al Cliente</label>
                                </div>
                            </div>
                            <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Nombre del Interesado:</label>
                                <x-select class="w-full">
                                    <option value="">selecciona </option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </x-select>
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Apellido Interesado:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">RFC Interesado:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Nombre del contacto:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">RFC Interesado:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Nombre del contacto:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Correo Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Telefono Alternativo:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Calle:</label>
                                <x-input type="text" />
                            </div>
                            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No.Exterior:</label>
                                    <x-input type="text" />
                                </div>
                                <div class="flex flex-col text-black dark:text-white">
                                    <label for="">No. Interior:</label>
                                    <x-input type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Entre calle:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Referencia:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Cdogo Postal:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Colonia:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Municipio:</label>
                                <x-input type="text" />
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Estado:</label>
                                <x-input type="text" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mt-5">
                    <x-button-routing href="{{route('clientes.dprocedencia')}}" wire:navigate.hover><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 7l-5 5l5 5" /><path d="M17 7l-5 5l5 5" /></svg> Anterior</x-button-routing>
                    <x-button-routing href="{{route('clientes.dorden')}}" wire:navigate.hover>Siguiente <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7l5 5l-5 5" /><path d="M13 7l5 5l-5 5" /></svg></x-button-routing>
                </div>
            </div>
        
        </div>
    </div>
</x-app-layout>
