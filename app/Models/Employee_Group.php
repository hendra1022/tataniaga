<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Group extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_employee_groups';
    protected $table = 'employee_groups';
}
