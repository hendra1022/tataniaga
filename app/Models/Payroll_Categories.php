<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll_Categories extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_payroll_categories';
    protected $table = 'payroll_categories';
}
