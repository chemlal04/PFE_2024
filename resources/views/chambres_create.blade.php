@extends('dashboard')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Create New Chambre</h2> <!-- Adjusted title -->
        <form action="{{ route('chambres.store') }}" method="POST"> <!-- Adjusted route -->
            @csrf
            
            <div class="mb-4">
                <label for="Vile_hotel" class="block text-gray-700">Vile Hotel</label> <!-- Adjusted column name -->
                <input type="text" name="Vile_hotel" id="Vile_hotel" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="n_place" class="block text-gray-700">Nombre Places</label> <!-- Adjusted column name -->
                <input type="number" name="n_place" id="n_place" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="numero" class="block text-gray-700">Numero</label> <!-- Adjusted column name -->
                <input type="number" name="numero" id="numero" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            
            <div class="mb-4">
                <label for="N_etape" class="block text-gray-700">N Etape</label> <!-- Adjusted column name -->
                <input type="number" name="N_etape" id="N_etape" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="prix" class="block text-gray-700">Prix</label> <!-- Adjusted column name -->
                <input type="number" name="prix" id="prix" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Create</button>
                <a href="{{ url()->previous() }}" class="ml-4 px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
