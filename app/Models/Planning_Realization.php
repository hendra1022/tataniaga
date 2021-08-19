<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning_Realization extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_planning_realization';
    protected $table = 'planning_realization';
}
