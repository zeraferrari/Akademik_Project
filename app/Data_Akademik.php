<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Akademik extends Model
{
    protected $table = 'data_akademik';
    protected $fillable = [
        'Nama', 'NIM', 'Email', 'Password'
    ];    
}
