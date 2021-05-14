<?php

namespace App\Http\Controllers;

use App\GifApiClient;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->flash();

        $q =  \join('+', \explode(' ', $request->input('q') ?? ''));
       
        $response =  GifApiClient::search([
            'q' => $q,
        ]);

        return \view('search', $response);
    }
}
