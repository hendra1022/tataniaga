<?php

namespace App\Http\Controllers;

use App\Models\Marital_Status;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function index(){
        $data = Marital_Status::all();
        $json = response()->json([
            'isSuccess' => true,
            'data' => $data
        ]);
        return $json;
    }
}
