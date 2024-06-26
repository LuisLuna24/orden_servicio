<div>
    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
        <div class="grid grid-cols-3 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Categoria:</label>
                <x-select class="w-full">
                    <option value="">selecciona </option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </x-select>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Sub.Categoria:</label>
                <x-select class="w-full">
                    <option value="">selecciona </option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </x-select>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Unidad de medida:</label>
                <x-select class="w-full">
                    <option value="">selecciona </option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </x-select>
            </div>
        </div>

        <div class="grid grid-cols-3 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Tipo de muestra:</label>
                <x-select class="w-full">
                    <option value="">selecciona </option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </x-select>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Cantidad de muestra:</label>
                <x-input class="w-full" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Recipiente:</label>
                <x-select class="w-full">
                    <option value="">selecciona </option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </x-select>
            </div>
        </div>

        <div class="grid grid-cols-3 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">No.lote:</label>
                <x-input class="w-full" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Fecha de muestreo:</label>
                <x-input type="date" class="w-full" />
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Productor o responsable:</label>
                <x-input class="w-full" />
            </div>
        </div>

    </div>

    <div class="flex flex-col text-black dark:text-white">
        <label for="">Otros Datos: (Para que necesita )</label>
        <x-textarea></x-textarea>
    </div>
    <div class="mt-3">
        <x-button>Agregar</x-button>
    </div>
    <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No. Muestra
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sub. categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo de muestra
                    </th>
                    <th scope="col" class="text-center  py-3">
                        Editar
                    </th>
                    <th scope="col" class="text-center  py-3">
                        Analisis
                    </th>
                    <th scope="col" class="text-center py-3">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Agua
                    </td>
                    <td class="px-6 py-4">
                        Uso Agricola
                    </td>
                    <td class="px-6 py-4">
                        Agua de rio
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="editar_muestra">Editar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="agregar_analisis">Agregar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-danger-button>Eliminar</x-danger-button>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                    </th>
                    <td class="px-6 py-4">
                        Agua
                    </td>
                    <td class="px-6 py-4">
                        Consumo Humano
                    </td>
                    <td class="px-6 py-4">
                        Agua de filtro
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="editar_muestra">Editar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="agregar_analisis">Agregar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-danger-button>Eliminar</x-danger-button>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Agua
                    </td>
                    <td class="px-6 py-4">
                        Agua salada
                    </td>
                    <td class="px-6 py-4">
                        Agua de mar
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="editar_muestra">Editar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-button wire:click="agregar_analisis">Agregar</x-button>
                    </td>
                    <td class=" py-4 text-center">
                        <x-danger-button>Eliminar</x-danger-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <x-dialog-modal wire:model="analisis">
        <x-slot name='title'>
            <h2 class="text-center">Analisis</h2>
        </x-slot>
        <x-slot name='content'>
            <div>
                <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Tipo de Análisis:</label>
                        <x-select class="w-full">
                            <option value="">selecciona</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </x-select>
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="flex flex-row gap-5 mb-5">
                        <div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">Datos:</label>
                                <x-select class="w-full">
                                    <option value="">selecciona</option>
                                    <option value="">Tipo analisis 1</option>
                                    <option value="">Tipo analisis 2</option>
                                    <option value="">Tipo analisis 3</option>
                                    <option value="">Tipo analisis 4</option>
                                </x-select>
                            </div>
                        </div>
                        <div class="w-full">
                            <label for="" class="text-black dark:text-white">Buscar</label>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <div
                                    class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <x-input type="text" id="table-search" class="block pt-2 ps-10 text-sm w-full" placeholder="(Nombre del analisis)" />
                            </div>
                        </div>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">

                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre del analisis (clave de servicio)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripcion
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 1
                                </th>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-2" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 2
                                </th>


                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 3
                                </th>


                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 4
                                </th>


                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 5
                                </th>


                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Analisis 6
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer' class="w-full">
            <div class="mt-5 flex justify-around flex-row-reverse w-full">
                <x-danger-button wire:click="down_reg">Cancelar</x-danger-button>
                <x-button wire:click="down_reg">Aceptar</x-button>
            </div>
        </x-slot>
    </x-dialog-modal>



    <x-dialog-modal wire:model="editar">
        <x-slot name='title'>
            <h2 class="text-center">Editar muestra</h2>
        </x-slot>
        <x-slot name='content'>
            <div>
                <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Categoria:</label>
                            <x-select class="w-full">
                                <option value="">selecciona </option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </x-select>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Sub.Categoria:</label>
                            <x-select class="w-full">
                                <option value="">selecciona</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </x-select>
                        </div>
                    </div>
            
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Tipo de Muestra:</label>
                            <x-select class="w-full">
                                <option value="">selecciona</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </x-select>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Cantidad a enviar:</label>
                            <x-input class="w-full" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5 mb-1">
            
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Recipiente:</label>
                            <x-select class="w-full">
                                <option value="">selecciona </option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </x-select>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">No.Lote:</label>
                            <x-input class="w-full" />
                        </div>
                    </div>
            
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Fecha de muestreo:</label>
                            <x-input type="date" class="w-full" />
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Productor o responsable: </label>
                            <x-input class="w-full" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">Otros Datos: (Para que necesita )</label>
                    <x-textarea></x-textarea>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer' class="w-full">
            <div class="mt-5 flex justify-around flex-row-reverse w-full">
                <x-danger-button wire:click="down_edit">Cancelar</x-danger-button>
                <x-button wire:click="down_reg">Aceptar</x-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>