<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SwapiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://swapi.dev/api/';
    }

    public function fetchData(string $resource, ?string $search = null)
    {
        $url = $this->baseUrl . $resource;
        
        if ($search) {
            $url .= '?search=' . urlencode($search);
        }

        $response = Http::get($url);

        return $response->json();
    }
}
