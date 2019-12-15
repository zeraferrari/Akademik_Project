<?php

namespace App\Http\Controllers;

use Exception;
use App\Data_Akademik;
use App\Http\Resources\AkademikResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Facades\Hash;
use GuzzleHttp\Client;
use GuzzleHttp\GuzzleResponseParser;

class Akademik_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Get_Data_API(){
        $client = new Client(['base_uri' => '192.168.43.26:8000']);

        $header = ['headers' =>
            [
                'Authorization' =>  'Bearer TOKENCeyC6HHzFk61aT6SpJeMHTCJCHvu1UD7QV8SOPH3BLAMbvsl5OPo78hstqP7fSeGT4JytAJF3D9g6JFyEt45LXZT',
                'Accept'    =>  'application/json; charset=utf-8',
            ]
        ];

        $send = $client->request('GET', '/api/member', $header);
        $response = $send->getBody();
        return $response;
    }
    
    public function index()
    {
        // $get_data = Data_Akademik::all();

        // return view('Akademik.index', compact('get_data'));
        return AkademikResource::collection(Data_Akademik::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
