<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_perusahaan';
    protected $table = 'company_profile';
}
