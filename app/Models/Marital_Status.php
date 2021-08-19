<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marital_Status extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_marital_status';
    protected $table = "marital_status";
}
