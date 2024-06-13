
<div class="grid gap-5">
    <div class="flex gap-3 dark:text-white">
        <div class="flex flex-col gap-1">
            <label for="data">Datos:</label>
            <x-select wire:model.live="data">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </x-select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="status">Estado:</label>
            <x-select wire:model.live="status">
                <option value="0">Todos</option>
                <option value="1">Envio</option>
                <option value="2">Captura</option>
                <option value="3">Resepcion</option>
                <option value="4">Liverada</option>
                <option value="5">Cancelada</option>
            </x-select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="date">Fecha:</label>
            <x-input type="date" wire:model.live="date" />
        </div>
        <div class="flex flex-col gap-1 w-full">
            <label for="search">Buscar:</label>
            <x-input type="text" wire:model.live="search" placeholder="(No. orden, cliente o interesado)" />
        </div>
        <div class="grid place-items-end">
            <x-button-routing href="{{ route('clientes.dmuestras') }}" wire:navigate.hover>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M12 11l0 6" />
                    <path d="M9 14l6 0" />
                </svg> Nueva
            </x-button-routing>
        </div>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No. Orden
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prioridad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cliente/Interesado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Informacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Factura
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ver
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        024000003
                    </th>
                    <td class="px-6 py-4">
                        10/03/2024
                    </td>
                    <td class="px-6 py-4">
                        Normal
                    </td>
                    <td class="px-6 py-4">
                        Roberto Gomez Bolaños
                    </td>
                    <td class="px-6 py-4">
                        Sin informacion adicional
                    </td>
                    <td class="px-6 py-4">
                        Envio
                    </td>
                    <td class="px-6 py-4">
                        No
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-button-routing href="{{ route('clientes.show', '024000003') }}" wire:navigate.hover>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </x-button-routing>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-danger-button wire:click='delete(024000003)'>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-file-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <path d="M10 12l4 4m0 -4l-4 4" />
                            </svg>
                        </x-danger-button>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        024000002
                    </th>
                    <td class="px-6 py-4">
                        12/03/2024
                    </td>
                    <td class="px-6 py-4">
                        Urgente
                    </td>
                    <td class="px-6 py-4">
                        Victoriano Huerta
                    </td>
                    <td class="px-6 py-4">
                        Sin informacion adicional
                    </td>
                    <td class="px-6 py-4">
                        Envio
                    </td>
                    <td class="px-6 py-4">
                        Si
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-button-routing href="{{ route('clientes.show', '024000002') }}" wire:navigate.hover>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </x-button-routing>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-danger-button wire:click='delete(024000002)'>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-file-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <path d="M10 12l4 4m0 -4l-4 4" />
                            </svg>
                        </x-danger-button>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        024000001
                    </th>
                    <td class="px-6 py-4">
                        24/03/2024
                    </td>
                    <td class="px-6 py-4">
                        Normal
                    </td>
                    <td class="px-6 py-4">
                        Álvaro Obregón
                    </td>
                    <td class="px-6 py-4">
                        Algun tipo de informacion
                    </td>
                    <td class="px-6 py-4">
                        Captura
                    </td>
                    <td class="px-6 py-4">
                        No
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-button-routing href="{{ route('clientes.show', '024000001') }}" wire:navigate.hover>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </x-button-routing>
                    </td>
                    <td class="px-6 py-4 text-right">
                        {{-- <x-danger-button wire:click='delete(024000003)'><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></x-danger-button> --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-dialog-modal wire:model="delete_orden">
        <x-slot name='title'>
            <h2 class="text-center">¿Desea cancelar esta orden?</h2>
        </x-slot>
        <x-slot name='content'>
            <div class="flex flex-col w-ful">
                <label for="">No. Orden</label>
                <x-input type="text" class="form-control" name="no_orden" id="no_orden" wire:model="no_orden_eliminar" disabled/>
            </div>
            <div class="flex justify-around mt-10">
                <x-button wire:click="regresar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancelar Orden
                </x-button>
                <x-danger-button wire:click="regresar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Regresar
                </x-danger-button>
            </div>
        </x-slot>
        <x-slot name='footer'>
            
        </x-slot>
    </x-dialog-modal>
</div>
