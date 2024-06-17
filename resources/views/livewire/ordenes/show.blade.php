<div>
    <div>
        <div class="mb-5">{{-- -------------------------------------------------------------------------Datos del Cliene --}}
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
                <label for="">Estado:</label>
                <x-select>
                    <option value="0">Mexico</option>
                    <option value="1">Jalisco</option>
                    <option value="2">Puebla</option>
                </x-select>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Municipio:</label>
                <x-select>
                    <option value="0">Estado 1</option>
                    <option value="1">Estado 2</option>
                    <option value="2">Estado 3</option>
                </x-select>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Colonia:</label>
                <x-select>
                    <option value="0">Colonia 1</option>
                    <option value="1">Colonia 2</option>
                    <option value="2">Colonia 3</option>
                </x-select>
            </div>
        </div>
    </div>

    {{-- ======================================================================================================Datos del Interesado --}}
    <div>
        <div class="mt-5 mb-5">
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
                <label for="">Nombre Interesado:</label>
                <x-input type="text" />
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
                <label for="">Estado:</label>
                <x-select>
                    <option value="0">Mexico</option>
                    <option value="1">Jalisco</option>
                    <option value="2">Puebla</option>
                </x-select>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Municipio:</label>
                <x-select>
                    <option value="0">Estado 1</option>
                    <option value="1">Estado 2</option>
                    <option value="2">Estado 3</option>
                </x-select>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Colonia:</label>
                <x-select>
                    <option value="0">Colonia 1</option>
                    <option value="1">Colonia 2</option>
                    <option value="2">Colonia 3</option>
                </x-select>
            </div>
        </div>
    </div>


    {{-- ======================================================================================================Datos de la muestra --}}
    <div>
        <div class="mt-5 mb-5">
            <div class="flex justify-between items-center p-3">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Muestras') }}
                </h2>
            </div>
            <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tipo de Muestra
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. Lote
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Validación de la muestra
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha muestreo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha envio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ver Muestra
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Editar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cancelar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Porcino
                        </th>
                        <td class="px-6 py-4">
                            Musculo
                        </td>
                        <td class="px-6 py-4">
                            500 g
                        </td>
                        <td class="px-6 py-4">
                            453534543
                        </td>
                        <td class="px-6 py-4">
                            Sin validacion
                        </td>
                        <td class="px-6 py-4">
                            10/05/2024
                        </td>
                        <td class="px-6 py-4">
                            11/05/2024
                        </td>
                        <td class="px-6 py-4">
                            <x-button wire:click="ver_muestra('Porciono')"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-copy">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h3m9 -9v-5a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M13 17v-1a1 1 0 0 1 1 -1h1m3 0h1a1 1 0 0 1 1 1v1m0 3v1a1 1 0 0 1 -1 1h-1m-3 0h-1a1 1 0 0 1 -1 -1v-1" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                </svg></x-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-button wire:click="ver_muestra('Porciono')"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg></x-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-danger-button wire:click='delete(024000001)'>
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
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Agua
                        </th>
                        <td class="px-6 py-4">
                            Agua de rio
                        </td>
                        <td class="px-6 py-4">
                            500 ml
                        </td>
                        <td class="px-6 py-4">
                            453534543
                        </td>
                        <td class="px-6 py-4">
                            Sin validacion
                        </td>
                        <td class="px-6 py-4">
                            10/05/2024
                        </td>
                        <td class="px-6 py-4">
                            11/05/2024
                        </td>
                        <td class="px-6 py-4">
                            <x-button wire:click="ver_muestra('Agua de rio')"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-copy">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h3m9 -9v-5a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M13 17v-1a1 1 0 0 1 1 -1h1m3 0h1a1 1 0 0 1 1 1v1m0 3v1a1 1 0 0 1 -1 1h-1m-3 0h-1a1 1 0 0 1 -1 -1v-1" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                </svg></x-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-button wire:click="ver_muestra('Agua de rio')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </x-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-danger-button wire:click='delete(024000001)'>
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
                </tbody>
            </table>
        </div>
    </div>
    {{-- ====================================================================================================================Dialogs --}}
    {{-- ====================================================================================================================Ver Muestra --}}
    <x-dialog-modal wire:model="view_muestra">
        <x-slot name='title'>
            <h2 class="text-center">Muetsra</h2>
        </x-slot>
        <x-slot name='content'>
            <form class="grid gap-3">
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Categoria de muestra:</label>
                        <x-input />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Sub categoria:</label>
                        <x-input />
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Tipo de muestra:</label>
                        <x-input />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Descripcion muestra:</label>
                        <x-input />
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Cantidad enviada:</label>
                        <x-input type="text" />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">No. Lote:</label>
                        <x-input type="text" />
                    </div>
                </div>
                <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Productor/Responsable:</label>
                        <x-input type="text" />
                    </div>
                </div>
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">Otros datos:</label>
                    <x-textarea class="w-full max-h-60" type="text"></x-textarea>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">tipo de resipiente:</label>
                        <x-input />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Cantidad de resipientes:</label>
                        <x-input type="text" />
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Fecha muestreo:</label>
                        <x-input class="w-full" type="date" />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Fecha envio:</label>
                        <x-input class="w-full" type="date" />
                    </div>
                </div>
                {{-- ========================================================================================================Procedencias de la muestra --}}
                <div>
                    <div class="mt-10 mb-5">{{-- -------------------------------------------------------------------------Procedencia --}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Procedencia') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Sitio de muestreo:</label>
                            <x-input type="text" />
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Nombre del sitio</label>
                            <x-input type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Estado:</label>
                            <x-select>
                                <option value="0">Mexico</option>
                                <option value="1">Jalisco</option>
                                <option value="2">Puebla</option>
                            </x-select>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Municipio:</label>
                            <x-select>
                                <option value="0">Estado 1</option>
                                <option value="1">Estado 2</option>
                                <option value="2">Estado 3</option>
                            </x-select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Colonia:</label>
                            <x-select>
                                <option value="0">Colonia 1</option>
                                <option value="1">Colonia 2</option>
                                <option value="2">Colonia 3</option>
                            </x-select>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Calle:</label>
                            <x-input type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Codigo Postal:</label>
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
                            <label for="">Cordenadas GPS:</label>
                            <x-input type="text" />
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Registro SADER:</label>
                            <x-input type="text" />
                        </div>
                    </div>
                </div>
                <form>
                    <div class="mt-10 mb-5">{{-- -------------------------------------------------------------------------Validacion --}}
                        <div class="flex justify-between text-black dark:text-white">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ __('Validacion') }}
                            </h2>
                        </div>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Temperatura:</label>
                            <x-input type="text" />
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Cantidad recibida:</label>
                            <x-input type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Validar:</label>
                            <x-select>
                                <option value="">Seleccionar una opcion</option>
                                <option value="">Validar</option>
                                <option value="">No validar</option>
                            </x-select>
                        </div>

                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Prioridad:</label>
                            <x-select>
                                <option value="">Seleccionar prioridad</option>
                                <option value="">Urgente</option>
                                <option value="">Normal</option>
                            </x-select>
                        </div>
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Justificacion de validacion:</label>
                        <x-textarea></x-textarea>
                    </div>
                </form>
                <div>
                    <div class="mt-5 mb-5">{{-- -------------------------------------------------------------------------Analisis --}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Analisis') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5  mb-3">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Tipo de analisis:</label>
                            <x-select>
                                <option value="0">Tipo de analisis 1</option>
                                <option value="1">Tipo de analisis 2</option>
                                <option value="2">Tipo de analisis 3</option>
                                <option value="3">Tipo de analisis 4</option>
                            </x-select>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">

                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo de analisis
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Analisis especifico
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                                    <td class="px-6 py-4">
                                        <x-input type="checkbox" />
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Fitosanitario
                                    </th>
                                    <td class="px-6 py-4">
                                        FITO-7821736
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                                    <td class="px-6 py-4">
                                        <x-input type="checkbox" />
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Fitosanitario
                                    </th>
                                    <td class="px-6 py-4">
                                        FITO-745343
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-around mt-5">
                    <x-button wire:click="cancel_muestra">Guardar</x-button>
                    <x-danger-button wire:click="cancel_muestra">Cancelar</x-danger-button>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="delete_orden">
        <x-slot name='title'>
            <h2 class="text-center">¿Desea cancelar esta orden?</h2>
        </x-slot>
        <x-slot name='content'>
            <div class="flex flex-col w-ful">
                <label for="">No. Orden</label>
                <x-input type="text" class="form-control" name="no_orden" id="no_orden" wire:model="ordenEdit.no_orden" disabled/>
            </div>
            <div class="flex justify-around mt-10">
                <x-button wire:click="regresar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancelar Muestra
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
