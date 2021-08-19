<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif_Pajak_Penghasilan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tarif_pajak_penghasilan';
    protected $table = "tarif_pajak_penghasilan";
}
