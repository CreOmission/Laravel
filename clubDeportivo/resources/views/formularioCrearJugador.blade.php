<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un Jugador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @isset($jugador)
                        <form action="{{ url('modificarJugador/'.$jugador->id)}}" method="post">
                        @csrf
                            <x-label for="nombre"></x-label>
                            <x-input type="text" id="nombre" name="nombre" value="{{$jugador->nombre}}"></x-input>
                            <br>

                            <x-label for="edad">edad</x-label>
                            <x-input type="text" id="edad" name="edad" value="{{$jugador->edad}}"></x-input>
                            <br>

                            <x-label for="equipo">Equipo:</x-label>
                            <select name="equipo">
                                @foreach ($leq as $equip)
                                    <option value="{{$equip->id}}">{{$equip->nombre}}</option>
                                @endforeach
                            </select>
                            <br><br>

                            <x-button class="ml-4">
                                    {{ __('Guardar jugador')}}
                            </x-button>
                        
                         </form>
                    @else
                    <form action="{{ url('crearJugador/')}}" method="post">
                        @csrf
                            <x-label for="nombre">Nombre del jugador:</x-label>
                            <x-input type="text" id="nombre" name="nombre"></x-input>
                            <br>

                            <x-label for="edad">edad</x-label>
                            <x-input type="text" id="edad" name="edad" ></x-input>
                            <br>

                            <x-label for="equipo">Equipo:</x-label>
                            <select name="equipo">
                                @foreach ($leq as $equip)
                                    <option value="{{$equip->id}}">{{$equip->nombre}}</option>
                                @endforeach
                            </select>
                            <br><br>

                            <x-button class="ml-4">
                                    {{ __('Guardar jugador')}}
                            </x-button>
                        
                         </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    