<?php
namespace App\Http\Controllers;

use App\Models\Vol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse; 



class VolController extends Controller
{
    public function approval()
    {
        $vols = Vol::all();
        return view('approval', compact('vols'));
    }

    public function create()
    {
        return view('vols_create');
    }

   
public function store(Request $request)
{
    // Get the authenticated user
    $user = Auth::user();
    $userId = $user->id;
    $userName = $user->name;

    // Validate the request data
    $request->validate([
        'Nom_vol' => 'required|string|max:255',
        'Ville_depart' => 'required|string|max:255',
        'Vile_arrivee' => 'required|string|max:255',
        'date_depart' => 'required|date',
        'date_arrivee' => 'required|date',
        'H_depart' => 'required|date_format:H:i',
        'H_arrivage' => 'required|date_format:H:i',
        'type' => 'required|string|max:255',
        'N_place' => 'required|integer|min:1',
        'prix' => 'required|numeric|min:0',
    ]);

    Vol::create([
        'Nom_vol' => $request->input('Nom_vol'),
        'Ville_depart' => $request->input('Ville_depart'),
        'Vile_arrivee' => $request->input('Vile_arrivee'),
        'date_depart' => $request->input('date_depart'),
        'date_arrivee' => $request->input('date_arrivee'),
        'H_depart' => $request->input('H_depart'),
        'H_arrivage' => $request->input('H_arrivage'),
        'type' => $request->input('type'),
        'N_place' => $request->input('N_place'),
        'prix' => $request->input('prix'),
        'id_user' => $userId,
        'id_name' => $userName,
    ]);
    return redirect()->route('home')->with('success', 'Flight created successfully.');
}


    public function edit_vols($id)
    {
        $vol = Vol::findOrFail($id);
        return view('edit', compact('vol'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom_vol' => 'required|string|max:255',
            'Ville_depart' => 'required|string|max:255',
            'Vile_arrivee' => 'required|string|max:255',
            'date_depart' => 'required|date',
            'type' => 'required|string|max:255',
            'N_place' => 'required|integer|min:1',
        ]);

        $vol = Vol::findOrFail($id);
        $vol->update($request->all());

        return redirect()->route('home')->with('success', 'Flight updated successfully.');
    }

    public function destroy($id)
    {
        $vol = Vol::findOrFail($id);
        $vol->delete();

        return redirect()->route('home')->with('success', 'Flight deleted successfully.');
    }
   

    public function statusUpdate(Request $request, $id): RedirectResponse
{
    $vol = Vol::findOrFail($id);

    $validatedData = $request->validate([
        'statut' => 'required|in:active,Blocked',
    ]);

    $vol->update(['statut' => $validatedData['statut']]);

    return redirect()->route('home')->withSuccess('Status request status updated successfully.');
}

    
}
