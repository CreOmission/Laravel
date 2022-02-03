<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clasificación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>LISTADO</h3>
                    <table class="max-w-7xl whitespace-nowrap">
                        <thead class="bg-gray-100">
                            <tr class="text-center font-bold">
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider"> Nombre</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider"> Puntos</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider"> Victorias</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider"> Derrotas</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($listaEquipos as $equipo)
                            <tr class="text-center">
                                <td class="px-6 py-4 whitespace-nowrap">{{$equipo->nombre}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$equipo->puntos}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$equipo->victorias}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$equipo->derrotas}}</td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
