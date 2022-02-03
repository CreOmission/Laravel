<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un premio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @isset($premio)
                        <form action="{{ url('modificar')}}" method="post">
                            @csrf

                            <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título del comic:</label>
                            <input type="text" id="titulo" name="titulo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$premio->comic}}">
                            <br>

                            <label for="anio" class="block text-gray-700 text-sm font-bold mb-2">Año del premio</label>
                            <input type="text" id="anio" name="anio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$premio->anio}}">
                            <br>

                            <label for="autor" class="block text-gray-700 text-sm font-bold mb-2">Autor del cómic</label>
                            <input type="text" id="autor" name="autor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$premio->autor}}">
                            <br>

                            <label for="portada" class="block text-gray-700 text-sm font-bold mb-2">Portada del cómic</label>
                            <input type="text" id="portada" name="portada" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$premio->portada}}">
                            <br>
                            <button class="ml-4">
                                    {{ __('Modificar premio')}}
                            </button>
                        
                        </form>
                    @else
                        <form action="{{ url('crearPremio')}}" method="post">
                            @csrf

                            <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título del comic:</label>
                            <input type="text" id="titulo" name="titulo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <br>

                            <label for="anio" class="block text-gray-700 text-sm font-bold mb-2">Año del premio</label>
                            <input type="text" id="anio" name="anio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <br>

                            <label for="autor" class="block text-gray-700 text-sm font-bold mb-2">Autor del cómic</label>
                            <input type="text" id="autor" name="autor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <br>

                            <label for="portada" class="block text-gray-700 text-sm font-bold mb-2">Portada del cómic</label>
                            <input type="text" id="portada" name="portada" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <br>
                            <button class="ml-4">
                                    {{ __('Modificar premio')}}
                            </button>
                        
                        </form>
                    @endisset
                   

                   
                     














                        @isset($premio)
                            <button class="ml-4">
                                {{ __('Modificar premio')}}
                            </button>
                        @else
                            <button class="ml-4">
                                {{ __('Crear premio')}}
                            </button>
                        @endisset
                       <!-- <input type="submit" value="Guardar equipo"> -->
                  
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
