<?php

namespace App\Http\Controllers;

use Exception;
use App\Data_Akademik;
use App\Http\Resources\AkademikResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
        $client = new Client(['base_uri' => '192.168.137.1']);

        $header = ['headers' =>
            [
                'Authorization' =>  'Bearer AYDW89VmLHsgGj2J3kl8WV9ABxxcAx5b4TkoE94FeQTMcoaRDfYlowq4gbydDLEYVRotTdFWn1bczNx8fXKaSbQM',
                'Accept'    =>  'application/json; charset=utf-8',
            ]
        ];

        $send = $client->request('GET', '/api/search-score', $header);
        $response = $send->getBody();
        return $response;
    }

    public function index()
    {
        // $get_data = Data_Akademik::all();

        // return view('Akademik.index', compact('get_data'));
        return AkademikResource::collection(Data_Akademik::all());
    }

    public function index_web(){
        $data = Data_Akademik::all();
        return view('Akademik.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'      => 'required|min:4|max:80',
            'NIM'       => 'required|min:10|unique:data_akademik',
            'Email'     => 'required|email|unique:data_akademik',
            'Password'  => 'required'
        ]);

        /*====================KOLOM DATABASE======================= */
        $new_data = Data_Akademik::create([
            'Nama'          =>  $request->Nama,
            'NIM'           =>  $request->NIM,
            'Email'         =>  $request->Email,
            'Password'      =>  Hash::make($request->Password)
        ]);

        return redirect()->route('akademik.index')->with('status', 'Data Has Been Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data_Akademik::findOrFail($id);
        return view('Akademik.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data_Akademik::findOrFail($id);
        return view('Akademik.edit', ['data'=>$data]);
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
        /*====================KOLOM DATABASE======================= */
        $data_update = Data_Akademik::findOrFail($id);

        $Nama       = $request->Nama;
        $NIM        = $request->NIM;
        $Email      = $request->Email;
        $Password   = $request->Password;

        if($Nama && $NIM && $Email && $Password) {
            $data_update->update([
                'Nama'      =>  $request->Nama,
                'NIM'       =>  $request->NIM,
                'Email'     =>  $request->Email,
                'Password'  =>  Hash::make($request->Password)
            ]);
        }

        else if($Nama && $NIM && $Email){
            $data_update->update([
                'Nama'  =>  $request->Nama,
                'NIM'   =>  $request->NIM,
                'Email' =>  $request->Email,
            ]);
        }
        $data_update->save();
        return redirect()->route('akademik.index')->with('status', 'Data Has Been Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data_Akademik::findOrFail($id);

        $data->delete();
        return redirect()->back()->with('status', 'Data Has Been Successfully Delete');
    }
}
