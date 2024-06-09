@extends('dashboard')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Edit Flight</h2>
        <form action="{{ route('vols.update', $vol->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="Nom_vol" class="block text-gray-700">Nom Vol</label>
                <input type="text" name="Nom_vol" id="Nom_vol" value="{{ $vol->Nom_vol }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="Ville_depart" class="block text-gray-700">Ville Depart</label>
                <input type="text" name="Ville_depart" id="Ville_depart" value="{{ $vol->Ville_depart }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="Vile_arrivee" class="block text-gray-700">Ville Arrivee</label>
                <input type="text" name="Vile_arrivee" id="Vile_arrivee" value="{{ $vol->Vile_arrivee }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="date_depart" class="block text-gray-700">Date Depart</label>
                <input type="date" name="date_depart" id="date_depart" value="{{ $vol->date_depart }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <input type="text" name="type" id="type" value="{{ $vol->type }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="N_place" class="block text-gray-700">Nombre Places</label>
                <input type="number" name="N_place" id="N_place" value="{{ $vol->N_place }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                <a href="{{ url()->previous() }}" class="ml-4 px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
