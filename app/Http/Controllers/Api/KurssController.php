<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function store(Request $request) {
       $validated = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'banner' => 'required',
            'count' => 'required|integer',
       ]);
    
       $Kurss = Kurss::create($validated);
       return response()->json($Kurss);
    }

    public function index() {
        return response()->json(Kurss::all());
    }
}
