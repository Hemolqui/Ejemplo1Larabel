<div>
@if (session('info'))
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Creado! {{session('info')}}</span> Se ha guardado su ultima modificacion.
            </div>
        </div>
        @endif  
<div class="flex justify-end">
                    <a href="{{ route('persona.create')}}">
                        <svg class="w-8 h-8 hover:text-emerald-700 rounded-full hover:bg-gray-100 p-1"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </a>
                </div>
    <div>
    <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">id</th>
              <th scope="col" class="px-6 py-4">gatito</th>
              <th scope="col" class="px-6 py-4">nombre</th>
              <th scope="col" class="px-6 py-4">edad</th>
              <th scope="col" class="px-6 py-4">acciones</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($personas as $persona)
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{$persona->id}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{$persona->gatito->nombre}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{$persona->nombre}}</td>
              <td class="whitespace-nowrap px-6 py-4">{{$persona->edad}}</td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex justify-center">
                                      
                                        <a href="{{ route('persona.edit', $persona->id)}}">
                                            <svg class="w-8 h-8 hover:text-yellow-600 rounded-full hover:bg-gray-100 p-1"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                       
                                        <button wire:click.prevent="delete('{{ $persona->id }}')">
                                            <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-gray-100 p-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                       
                                     </div>

                                </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
