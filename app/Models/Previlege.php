<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Previlege extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_previlege';
    protected $table = 'previlege';
}
