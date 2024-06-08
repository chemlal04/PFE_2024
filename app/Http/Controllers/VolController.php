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
        if ($vols->isEmpty()) {
            return "No data found in vols table.";
        }
        return view('components.dashboard_components.admin_vol.home', compact('vols'));
    }


    // Other methods...
}
