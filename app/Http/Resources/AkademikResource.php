<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AkademikResource extends JsonResource
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
            'NIM'       =>  $this->NIM, 
            'Email'     =>  $this->Email,
            'Password'  =>  $this->Password,
       ];
    }
}
