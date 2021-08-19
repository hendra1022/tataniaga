<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        $data = Roles::all();
        $json = response()->json([
            'isSuccess' => true,
            'data' => $data
        ]);
        return $json;
    }
}
