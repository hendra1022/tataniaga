<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_Sheet_Detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_balance_sheet_detail';
    protected $table = 'balance_sheet_detail';
}
