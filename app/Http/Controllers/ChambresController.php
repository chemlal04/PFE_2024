<?php

namespace App\Http\Controllers;

use App\Models\Chambres; // Change the model namespace
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class ChambresController extends Controller // Change the controller name
{
    public function display_chambers()
    {
        $Chambres = Chambres::all();
        return view('home_chambres', compact('Chambres'));
    }
    public function approval()
    {
        $chambres = Chambres::all(); // Change the model name
        return view('approval_chambres', compact('chambres')); // Change the variable name
    }

    public function create()
    {
        return view('chambres_create'); 
    }

    public function store(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();
        $userId = $user->id;
        $userName = $user->name;

        // Validate the request data
        $request->validate([
            'Vile_hotel' => 'required|string|max:255', 
            'n_place' => 'required|integer|min:1', 
            'numero' => 'required|integer|min:1', 
            'N_etape' => 'required|integer|min:1', 
            'prix' => 'required|numeric|min:0',
            'image1' => 'required|string|max:255', 
            'image2' => 'required|string|max:255', 
            'image3' => 'required|string|max:255', 
            'image4' => 'required|string|max:255', 
        ]);

        Chambres::create([
            'Vile_hotel' => $request->input('Vile_hotel'), 
            'n_place' => $request->input('n_place'), 
            'numero' => $request->input('numero'), 
            'N_etape' => $request->input('N_etape'), 
            'prix' => $request->input('prix'),
            'image1' => $request->input('image1'), 
            'image2' => $request->input('image2'), 
            'image3' => $request->input('image3'), 
            'image4' => $request->input('image4'), 
            'id_user' => $userId,
            'id_name' => $userName,
        ]);
        return redirect()->route('home_chambres')->with('success', 'Room created successfully.');
    }

    public function edit_chambres($id)
    {
        $chambre = Chambres::findOrFail($id); // Change the model name
        return view('edit', compact('chambre')); // Change the variable name
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Vile_hotel' => 'required|string|max:255', 
            'n_place' => 'required|integer|min:1', 
            'numero' => 'required|integer|min:1', 
            'N_etape' => 'required|integer|min:1', 
            'prix' => 'required|numeric|min:0',
            'image1' => 'required|string|max:255', 
            'image2' => 'required|string|max:255', 
            'image3' => 'required|string|max:255', 
            'image4' => 'required|string|max:255', 
        ]);

        $chambre = Chambres::findOrFail($id); // Change the model name
        $chambre->update($request->all());

        return redirect()->route('home')->with('success', 'Room updated successfully.');
    }

    public function destroy($id)
    {
        $chambre = Chambres::findOrFail($id); // Change the model name
        $chambre->delete();

        return redirect()->route('home')->with('success', 'Room deleted successfully.');
    }

    public function statusUpdate(Request $request, $id): RedirectResponse
    {
        $chambre = Chambres::findOrFail($id); // Change the model name

        $validatedData = $request->validate([
            'statut' => 'required|in:active,blocked', // Change the field values
        ]);

        $chambre->update(['statut' => $validatedData['statut']]);

        return redirect()->route('home')->withSuccess('Room status updated successfully.');
    }
}
