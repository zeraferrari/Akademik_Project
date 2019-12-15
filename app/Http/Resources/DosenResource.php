<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DosenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        =>  $this->id,
            'Nama'      =>  $this->Nama,
            'NIP'       =>  $this->NIM, 
            'Email'     =>  $this->Email,
            'Password'  =>  $this->Password,
       ];
    }
}
