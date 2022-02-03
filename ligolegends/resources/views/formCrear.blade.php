<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un equipo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('guardarEquipo') }}" method="get">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre del equipo:</label>
                        <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>

                        <label for="puntos" class="block text-gray-700 text-sm font-bold mb-2">Puntos</label>
                        <input type="text" id="puntos" name="puntos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>

                        <label for="victorias" class="block text-gray-700 text-sm font-bold mb-2">Victoria</label>
                        <input type="text" id="victorias" name="victorias" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>

                        <label for="derrotas" class="block text-gray-700 text-sm font-bold mb-2">Derrotas</label>
                        <input type="text" id="derrotas" name="derrotas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>

                        <input type="submit" value="Guardar equipo">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
