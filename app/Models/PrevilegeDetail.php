<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrevilegeDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_previlege_detail';
    protected $table = 'previlege_detail';
}
