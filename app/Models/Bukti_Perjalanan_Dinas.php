<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti_Perjalanan_Dinas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_bukti_perjalanan_dinas';
    protected $table = 'bukti_perjalanan_dinas';
}
