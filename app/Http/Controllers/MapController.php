<?php

namespace App\Http\Controllers;

use App\Models\Suc;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function showMap($id)
    {
        // Fetch the SUC data by ID
        $suc = Suc::findOrFail($id);

        return view('map', [
            'centerPoint' => [
                'lat' => $suc->latitude,
                'long' => $suc->longitude,
            ],
            'zoomLevel' => 20,
            'markers' => [
                [
                    'lat' => $suc->latitude,
                    'long' => $suc->longitude,
                    'popup' => $suc->name,
                ],
            ],
            'sucName' => $suc->name, 
            'sucAddress' => $suc->address, 
            'sucWebsite' => $suc->website, 
            'sucContact' => $suc->contact, 
        ]);
    }
}
