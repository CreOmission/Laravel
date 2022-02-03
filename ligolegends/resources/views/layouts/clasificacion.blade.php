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
                    <table border="1px solid black">
                    @foreach ($listaEquipos as $equipo)
                        <tr>
                        <td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->puntos}}</td>
                        <td>{{$equipo->victorias}}</td>
                        <td>{{$equipo->derrotas}}</td>
                        @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>