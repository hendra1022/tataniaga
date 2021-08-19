<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_Sheet extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_balance_sheet';
    protected $table = 'id_balance_sheet';
}
