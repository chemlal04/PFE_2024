<?php
namespace App\Http\Controllers;

use App\Models\Vol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    public function index()
    {
        $vols = Vol::all();
        return view('components.dashboard_components.admin_vol.home', compact('vols'));
    }

    public function create()
    {
        return view('vols_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom_vol' => 'required|string|max:255',
            'Ville_depart' => 'required|string|max:255',
            'Vile_arrivee' => 'required|string|max:255',
            'date_depart' => 'required|date',
            'type' => 'required|string|max:255',
            'N_place' => 'required|integer|min:1',
        ]);

        Vol::create($request->all());

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
}
