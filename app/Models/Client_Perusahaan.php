<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_Perusahaan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_client_perusahaan';
    protected $table = 'client_perusahaan';
}
