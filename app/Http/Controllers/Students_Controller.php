<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\GuzzleResponseParser;
use App\Auth_Dynamic_IP;


class Students_Controller extends Controller
{
    // public function Get_Data_API(){
    //     $client = new Client(['base_uri' => Auth_Dynamic_IP::$ip]);

    //     $header = ['headers' =>
    //         [
    //             'Authorization' =>  'Bearer '.Auth_Dynamic_IP::$api_token,
    //             'Accept'    =>  'application/json; charset=utf-8',
    //         ]
    //     ];

    //     $send = $client->request('GET', '/api/search-score', $header);
    //     $response = $send->getBody();
    //     return $response;
    // }
    public function get_data(Request $request){
        $curl = curl_init();
        $prov = "http://192.168.137.1/elearning/public/api/search-score?Nama=$request->Nama";

        curl_setopt_array($curl, array(
        CURLOPT_URL => $prov,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer AYDW89VmLHsgGj2J3kl8WV9ABxxcAx5b4TkoE94FeQTMcoaRDfYlowq4gbydDLEYVRotTdFWn1bczNx8fXKaSbQM"
        ),
        ));

        $response = curl_exec($curl);
        $data = json_decode($response);
        return view('Search.index', ['data'=>$data]);
    }

    public function to_view_search(){
        return view('Search.index');
    }
}
