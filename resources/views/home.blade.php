@extends('dashboard')

@section('content')
@if(isset($vols))
<div class="overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom Vol
                </th>
                <th scope="col" class="px-6 py-3">
                    Ville Depart
                </th>
                <th scope="col" class="px-6 py-3">
                    Ville Arrivee
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Depart
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre Places
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($vols as $vol)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">{{ $vol->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->Nom_vol }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->Ville_depart }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->Vile_arrivee }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->date_depart }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->type }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">{{ $vol->N_place }}</td>
                <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                    <a href="{{ url('/vols_edit/' . $vol->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('vols.destroy', $vol->id) }}" method="POST" style="display:inline;">
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
    <p>No vols data found</p>
@endif
@endsection
