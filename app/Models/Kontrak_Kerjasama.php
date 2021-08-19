<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak_Kerjasama extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kontrak_kerjasama';
    protected $table = 'kontrak_kerjasama';
}
