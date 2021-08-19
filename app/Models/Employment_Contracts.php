<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment_Contracts extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_employement_contracts';
    protected $table = 'employment_contracts';
}
