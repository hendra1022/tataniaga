<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll_Details extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_payroll_details';
    protected $table = 'payroll_details';
}
