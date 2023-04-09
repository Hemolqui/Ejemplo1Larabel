<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
            <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Creacion de Discos</h2>

            <form action="{{ route('persona.update',$persona->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="nombre">Nombre de la persona</label>
                        <input value="{{$persona->nombre}}" id="nombre" name="nombre" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                       
                    </div>
                    <div>
                        <label class="text-gray-700" for="edad">Edad de la persona</label>
                        <input value="{{$persona->edad}}" id="edad" name="edad" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="number">
                       
                    </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6 mt-4">

                    <div>
                        <label class="text-gray-700" for="id_gatito">Gatos</label>
                        <select id="id_gatito" name="id_gatito" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-600 block w-full p-2.5">
                            <option selected>Seleccione su gato</option>
                            @foreach ($gatitos as $gato)
                            <option value="{{ $gato->id }}" {{$persona->id_gatito==$gato->id?'selected':'' }}>
                                {{ $gato->nombre }}
                            </option>
                            @endforeach
                        </select>
                        
                    </div>
                  
    </div>
                <div class="flex justify-end mt-4 ">
                    <a href="{{ route('persona.index')}}" class="px-4 py-2 mr-2 mb-2 bg-gray-500 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Cancelar</a>
                    <button class="px-4 py-2 mr-2 mb-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Crear</button>
                </div>
                <div class="flex justify-end mt-4">
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
     
</x-app-layout>

