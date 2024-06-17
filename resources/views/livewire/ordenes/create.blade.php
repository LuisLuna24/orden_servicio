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
                <label for="">Documento:</label>
                <x-input type="file" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Folio de documento:</label>
                <x-input type="text" />
            </div>
        </div>
        <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">NETSUITE:</label>
                <x-input type="text" />
            </div>
        </div>
        <hr class="mt-5 mb-5">
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Razón Social:</label>
                <x-input type="text" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Régimen Fiscal;</label>
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
                <label for="">Teléfono:</label>
                <x-input type="text" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Teléfono Alternativo:</label>
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
                <label for="">Código Postal:</label>
                <x-input type="text" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Estado:</label>
                <x-select>
                    <option value="0">México</option>
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
                    <label for="">¿Es igual al Cliente?</label>
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
                <label for="">Teléfono:</label>
                <x-input type="text" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Teléfono Alternativo:</label>
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
                <label for="">Teléfono:</label>
                <x-input type="text" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Teléfono Alternativo:</label>
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
                <label for="">Código Postal:</label>
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
                <x-button wire:click="new_muestra">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M12 11l0 6" />
                        <path d="M9 14l6 0" />
                    </svg> Nueva
                </x-button>
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
                            Descripción
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
                            Fecha envío
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ver Muestra
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Editar
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- ====================================================================================================================Dialogs --}}
    {{-- ====================================================================================================================Nueva Muestra --}}
    <x-dialog-modal wire:model="add_muestra">
        <x-slot name='title'>
            <h2 class="text-center">Nueva muestra</h2>
        </x-slot>
        <x-slot name='content'>
            <form class="grid gap-3">
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Categoría de muestra:</label>
                        <x-select>
                            <option value="0">Categoría 1</option>
                            <option value="1">Categoría 2</option>
                            <option value="2">Categoría 3</option>
                            <option value="3">Categoría 4</option>
                        </x-select>
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Sub Categoría:</label>
                        <x-select>
                            <option value="0">Sub Categoría 1</option>
                            <option value="1">Sub Categoría 2</option>
                            <option value="2">Sub Categoría 3</option>
                            <option value="3">Sub Categoría 4</option>
                        </x-select>
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Tipo de muestra:</label>
                        <x-select>
                            <option value="0">Tipo de muestra 1</option>
                            <option value="1">Tipo de muestra 2</option>
                            <option value="2">Tipo de muestra 3</option>
                            <option value="3">Tipo de muestra 4</option>
                        </x-select>
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Descripción muestra:</label>
                        <x-select>
                            <option value="0">Descripción muestra 1</option>
                            <option value="1">Descripción muestra 2</option>
                            <option value="2">Descripción muestra 3</option>
                            <option value="3">Descripción muestra 4</option>
                        </x-select>
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
                        <x-select>
                            <option value="0">Tipo de resipiente 1</option>
                            <option value="1">Tipo de resipiente 2</option>
                            <option value="2">Tipo de resipiente 3</option>
                            <option value="3">Tipo de resipiente 4</option>
                        </x-select>
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
                        <label for="">Fecha envío:</label>
                        <x-input class="w-full" type="date" />
                    </div>
                </div>

                {{-- ========================================================================================================Procedencias de la muestra --}}
                <div>
                    <div class="mt-5 mb-5">{{-- -------------------------------------------------------------------------Procedencia --}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Procedencia') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Nombre de Procedencia:</label>
                            <x-input type="text" />
                        </div>
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
                            <label for="">Código Postal:</label>
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
                <div>
                    <div class="mt-5 mb-5">{{-- -------------------------------------------------------------------------Análisis  --}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Análisis ') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5  mb-3">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Tipo de Análisis :</label>
                            <x-select>
                                <option value="0">Tipo de Análisis  1</option>
                                <option value="1">Tipo de Análisis  2</option>
                                <option value="2">Tipo de Análisis  3</option>
                                <option value="3">Tipo de Análisis  4</option>
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
                                        Tipo de Análisis 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Análisis  especifico
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
                    <x-button wire:click="cancel_muestra">Agregar</x-button>
                    <x-danger-button wire:click="cancel_muestra">Cancelar</x-danger-button>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>


    {{-- ====================================================================================================================Ver Muestra --}}
    <x-dialog-modal wire:model="view_muestra">
        <x-slot name='title'>
            <h2 class="text-center">Muestra</h2>
        </x-slot>
        <x-slot name='content'>
            <form class="grid gap-3">
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Categoría de muestra:</label>
                        <x-input />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Sub Categoría:</label>
                        <x-input />
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Tipo de muestra:</label>
                        <x-input />
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Descripción muestra:</label>
                        <x-input />
                    </div>
                </div>
                <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Cantidad de muestra:</label>
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
                        <label for="">Tipo de resipiente:</label>
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
                        <label for="">Fecha envío:</label>
                        <x-input class="w-full" type="date" />
                    </div>
                </div>
                <div>
                    <div class="mt-5 mb-5">{{-- -------------------------------------------------------------------------Análisis  --}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Análisis ') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5  mb-3">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Tipo de Análisis :</label>
                            <x-select>
                                <option value="0">Tipo de Análisis  1</option>
                                <option value="1">Tipo de Análisis  2</option>
                                <option value="2">Tipo de Análisis  3</option>
                                <option value="3">Tipo de Análisis  4</option>
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
                                        Tipo de Análisis 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Análisis  especifico
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
                    <x-button wire:click="cancel_muestra">Agregar</x-button>
                    <x-danger-button wire:click="cancel_muestra">Cancelar</x-danger-button>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>
</div>
