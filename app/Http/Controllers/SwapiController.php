<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SwapiService;

class SwapiController extends Controller
{
    protected $swapiService;

    public function __construct(SwapiService $swapiService)
    {
        $this->swapiService = $swapiService;
    }

    public function getPeople(Request $request)
    {
        $search = $request->query('search');
        return response()->json($this->swapiService->fetchData('people', $search));
    }

    public function getFilms(Request $request)
    {
        $search = $request->query('search');
        return response()->json($this->swapiService->fetchData('films', $search));
    }
}
