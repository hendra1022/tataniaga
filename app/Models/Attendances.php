<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_attendances';
    protected $table = 'attendances';
}
