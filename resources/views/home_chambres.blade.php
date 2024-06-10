@extends('dashboard')

@section('content')
@if(isset($Chambres))
<div class="overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    STATUS
                </th>
                <th scope="col" class="px-6 py-3">
                    Ville Hotel 
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre Places 
                </th>
                <th scope="col" class="px-6 py-3">
                    Numero 
                </th>
                <th scope="col" class="px-6 py-3">
                    N Etape 
                </th>
                <th scope="col" class="px-6 py-3">
                    Prix 
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($Chambres as $chambre)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 text-center even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="{{ $chambre->statut === 'active' ? 'text-white bg-green-500 rounded w-20' : ($chambre->statut === 'Blocked' ? 'text-white text-center rounded w-20' : '') }}">{{ $chambre->statut }}</td>

                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $chambre->Vile_hotel }}</td> 
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $chambre->n_place }}</td> 
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $chambre->numero }}</td> 
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $chambre->N_etape }}</td> 
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $chambre->prix }}</td> 
                
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                    <a href="{{ url('/chambres_edit/' . $chambre->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> <!-- Adjusted route -->
                    <form action="{{ route('chambres.destroy', $chambre->id) }}" method="POST" style="display:inline;"> <!-- Adjusted route -->
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-4">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@else
    <p>No chambres data found</p> <!-- Adjusted message -->
@endif
@endsection
