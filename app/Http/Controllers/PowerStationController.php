<?php

namespace App\Http\Controllers;

use App\Models\PowerStation;
use Illuminate\Http\Request;

class PowerStationController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $power = PowerStation::findBySlug($slug);

        if ($power) {
            return view('front.layout.power-station', compact('power'));
        } else {
            abort(404);
        }

    }
}
