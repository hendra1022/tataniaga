<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business_Trip extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_business_trip';
    protected $table = 'business_trip';
}
