<?php

namespace App\Http\Controllers;

use App\Models\Tarif_Pajak_Penghasilan;
use Illuminate\Http\Request;

class TarifPajakPenghasilanController extends Controller
{
    public function index(){
        $data = Tarif_Pajak_Penghasilan::all();
        $json = response()->json([
            'isSuccess' => true,
            'data' => $data
        ]);
        return $json;
    }
}
