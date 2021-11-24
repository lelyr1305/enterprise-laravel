<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'cerita',
        'jenis_kelamin',
        'fakultas'
     ];
}
