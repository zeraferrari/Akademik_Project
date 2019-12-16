<?php

namespace App\Http\Controllers;

use App\Http\Resources\DosenResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Data_Dosen;

class Dosen_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DosenResource::collection(Data_Dosen::all());
    }

    public function index_web(){
        $data = Data_Dosen::all();
        return view('Dosen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dosen.create');
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
            'NIP'       => 'required|min:10|unique:data_dosen',
            'Email'     => 'required|email|unique:data_dosen',
            'Password'  => 'required' 
        ]);

        /*====================KOLOM DATABASE======================= */
        $new_data = Data_Dosen::create([
            'Nama'          =>  $request->Nama,
            'NIP'           =>  $request->NIP,
            'Email'         =>  $request->Email,
            'Password'      =>  Hash::make($request->Password)
        ]);

        return redirect()->route('dosen.index')->with('status', 'Data Has Been Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data_Dosen::findOrFail($id);
        return view('dosen.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data_Dosen::findOrFail($id);
        return view('dosen.edit', ['data'=>$data]);
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
        $data_update = Data_Dosen::findOrFail($id);
        
        $Nama       = $request->Nama;
        $NIP        = $request->NIP;
        $Email      = $request->Email;
        $Password   = $request->Password;

        if($Nama && $NIP && $Email && $Password) {
            $data_update->update([
                'Nama'      =>  $request->Nama,
                'NIP'       =>  $request->NIP,
                'Email'     =>  $request->Email,
                'Password'  =>  Hash::make($request->Password)
            ]);    
        }

        else if($Nama && $NIP && $Email){
            $data_update->update([
                'Nama'  =>  $request->Nama,
                'NIP'   =>  $request->NIP,
                'Email' =>  $request->Email,
            ]);    
        }
        $data_update->save();
        return redirect()->route('dosen.index')->with('status', 'Data Has Been Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data_Dosen::findOrFail($id);

        $data->delete();
        return redirect()->back()->with('status', 'Data Has Been Successfully Delete');
    }
}
