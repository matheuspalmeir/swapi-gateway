<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SwapiService;
use Illuminate\Support\Facades\Cache;

class SwapiController extends Controller
{
    protected $swapiService;

    public function __construct(SwapiService $swapiService)
    {
        $this->swapiService = $swapiService;
    }

    public function getPeople(Request $request)
    {   
        Cache::rememberForever('people_requests', fn() => 0);
        Cache::increment('people_requests');
        $search = $request->query('search');
        return response()->json($this->swapiService->fetchData('people', $search));
    }

    public function getFilms(Request $request)
    {   
        Cache::rememberForever('films_requests', fn() => 0);
        Cache::increment('films_requests');
        $search = $request->query('search');
        return response()->json($this->swapiService->fetchData('films', $search));
    }
}
