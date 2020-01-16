<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\GuzzleResponseParser;

class Students_Controller extends Controller
{
    public function Get_Data_API(){
        $client = new Client(['base_uri' => '127.0.0.1:8000']);

        $header = ['headers' =>
            [
                'Authorization' =>  'Bearer Bt8EnkvIQJmmSBy73JubuScz17yUbtr0l07xn4wB0VBiAgmJZ85NU6qwZIhL5XdJkmtTKNx0H96o7zGBqYezS2kL',
                'Accept'    =>  'application/json; charset=utf-8',
            ]
        ];

        $send = $client->request('GET', '/api/member', $header);
        $response = $send->getBody();
        return $response;
    }
}
