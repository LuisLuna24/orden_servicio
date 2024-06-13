<div>
    <div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">No. de Orden:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Fecha:</label>
                <x-input class="w-full" type="date" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Prioridad:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Estatus:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Informacion Adicional:</label>
                <x-textarea type="text" disabled></x-textarea>
            </div>
        </div>
    </div>
    <div>
        <div class="mt-10 mb-5">{{---------------------------------------------------------------------------Datos del Cliene--}}
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Datos del Cliente') }}
            </h2>
            <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Razon Social:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Regimen Fiscal</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">CFDI:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Tipo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Calle:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">No.Exterior:</label>
                    <x-input type="text" disabled/>
                </div>
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">No. Interior:</label>
                    <x-input type="text" disabled/>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Cdogo Postal:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Colonia:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Municipio:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Estado:</label>
                <x-input type="text" disabled/>
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
                    <x-input type="checkbox" disabled/>
                    <label for="">Es igual al Cliente</label>
                </div>
            </div>
            <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Nombre Interesado:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Apellido Interesado:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">RFC Interesado:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Nombre del contacto:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">RFC Interesado:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Nombre del contacto:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Correo Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Telefono Alternativo:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Calle:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">No.Exterior:</label>
                    <x-input type="text" disabled/>
                </div>
                <div class="flex flex-col text-black dark:text-white">
                    <label for="">No. Interior:</label>
                    <x-input type="text" disabled/>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Entre calle:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Referencia:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Cdogo Postal:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Colonia:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Municipio:</label>
                <x-input type="text" disabled/>
            </div>
            <div class="flex flex-col text-black dark:text-white">
                <label for="">Estado:</label>
                <x-input type="text" disabled/>
            </div>
        </div>
    </div>
    <div class="mt-10 mb-5">{{---------------------------------------------------------------------------Datos de la muestra--}}
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Muestras') }}
        </h2>
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
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        <x-button wire:click="active('Porciono')" ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h3m9 -9v-5a2 2 0 0 0 -2 -2h-2" /><path d="M13 17v-1a1 1 0 0 1 1 -1h1m3 0h1a1 1 0 0 1 1 1v1m0 3v1a1 1 0 0 1 -1 1h-1m-3 0h-1a1 1 0 0 1 -1 -1v-1" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg></x-button> 
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        <x-button wire:click="active('Agua de rio')" ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h3m9 -9v-5a2 2 0 0 0 -2 -2h-2" /><path d="M13 17v-1a1 1 0 0 1 1 -1h1m3 0h1a1 1 0 0 1 1 1v1m0 3v1a1 1 0 0 1 -1 1h-1m-3 0h-1a1 1 0 0 1 -1 -1v-1" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg></x-button> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
{{-----------------------------------------------------------------------------------------------Modal de muestras--}}
    <x-dialog-modal wire:model="datos_muestra">
        <x-slot name='title'>
            <h2 class="text-center">Datos de muetsra</h2>
        </x-slot>
        <x-slot name='content'>
            <div>
                <div>
                    <div class="mb-5">{{---------------------------------------------------------------------------Datos del Cliene--}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Datos generales de la muestra') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Categoria de muestra:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Sub categoria:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Tipo de muestra:</label>
                            <x-input type="text" wire:model="nombre_muetsra.nombre"/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Descripcion muestra:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Cantidad:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">No. Lote:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Productor/Responsable:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="flex flex-col text-black dark:text-white">
                        <label for="">Otros datos:</label>
                        <x-textarea class="w-full max-h-60" type="text" disabled></x-textarea>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Estatus:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Descripcion estatus:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Fecha muestreo:</label>
                            <x-input class="w-full" type="date" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Fecha envio:</label>
                            <x-input class="w-full" type="date" disabled/>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mt-10 mb-5">{{---------------------------------------------------------------------------Procedencia--}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Procedencia') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div> 
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Sitio de muestreo:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Nombre del sitio</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Estado:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Colonia:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Municipio:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Calle:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Codigo Postal:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">No.Exterior:</label>
                                <x-input type="text" disabled/>
                            </div>
                            <div class="flex flex-col text-black dark:text-white">
                                <label for="">No. Interior:</label>
                                <x-input type="text" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 max-md:grid-cols-1 gap-5 mb-1">
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Cordenadas GPS:</label>
                            <x-input type="text" disabled/>
                        </div>
                        <div class="flex flex-col text-black dark:text-white">
                            <label for="">Registro SADER:</label>
                            <x-input type="text" disabled/>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="mt-10 mb-5">{{---------------------------------------------------------------------------Analisis--}}
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Analisis') }}
                        </h2>
                        <div class="w-full h-1 bg-gray-800 dark:bg-gray-200"></div>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo de analisis
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Analisis especifico
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ease-in duration-300">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Fitosanitario
                                    </th>
                                    <td class="px-6 py-4">
                                        FITO-7821736
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>
</div>
