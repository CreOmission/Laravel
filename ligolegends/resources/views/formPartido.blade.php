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
                    <form action="{{ url('guardarPartido') }}" method="get">


                        <label for="equipo1">Equipo de casa</label>
                        <select id="equipo1" name="equipo1">
                            @foreach ($listaEquipos as $equipo)
                             <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="victorias1">victorias</label>
                        <input type="text" name="victorias1" id="victorias1"></input>
                        <br>

                        <label for="equipo2">Equipo visitante</label>
                        <select id="equipo2" name="equipo2">
                            @foreach ($listaEquipos as $equipo)
                             <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="victorias2">victorias</label>
                        <input type="text" name="victorias2" id="victorias2"></input>
                        <br>

                        <button class="ml-4">{{ __('Registrar Partido') }}</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
