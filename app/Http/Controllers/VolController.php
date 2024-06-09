<?php

namespace App\Http\Controllers;

use App\Models\Vol;

use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $vols = Vol::all();
    dd($vols); // This will dump the $vols data and stop execution
    return view('components.dashboard_components.admin_vol.home', compact('vols'));
}



    // Other methods...
}
