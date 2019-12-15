<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\GuzzleResponseParser;

class Students_Controller extends Controller
{
    public function Get_Data_API(){
        $client = new Client(['base_uri' => '192.168.43.26:8000']);

        $header = ['headers' =>
            [
                'Authorization' =>  'Bearer TOKENCeyC6HHzFk61aT6SpJeMHTCJCHvu1UD7QV8SOPH3BLAMbvsl5OPo78hstqP7fSeGT4JytAJF3D9g6JFyEt45LXZT',
                'Accept'    =>  'application/json; charset=utf-8',
            ]
        ];

        $send = $client->request('GET', '/api/students', $header);
        $response = $send->getBody();
        return $response;
    }
}
