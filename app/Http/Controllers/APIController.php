<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Routing\Controller;

class APIController extends Controller
{
    public function index() {
        $client = new Client();

        $apiKey = 'api';
        $reponse = $client->request('GET', 'api_request_link{$apiKey}');

        $movies = json_decode($reponse->getBody());

        return view('view_name', ['movies' => $movies]);
    }
}
