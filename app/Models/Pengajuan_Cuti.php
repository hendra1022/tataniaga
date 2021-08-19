<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_Cuti extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengajuan_cuti';
    protected $table = 'pengajuan_cuti';
}
