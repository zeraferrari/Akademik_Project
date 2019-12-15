<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Dosen extends Model
{
    protected $table = 'data_dosen';
    protected $fillable = [
        'Nama', 'NIP', 'Email', 'Password'
    ];
}
