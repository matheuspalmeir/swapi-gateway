<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MetricsController extends Controller{
    public function getMetrics(){
        return response()->json([
            'people_requests' => Cache::get('people_requests', 0),
            'films_requests' => Cache::get('films_requests', 0),
        ]);
    }

    public function resetMetrics(){
        Cache::forget('people_requests');
        Cache::forget('films_requests');

        return response()->json(['message' => 'Metrics reset']);
    }
}
