<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colis;

class ColisController extends Controller
{
    public function getColis() {
        $dataColis=colis::all();
        return view('demande-colis',['donnees'=>$dataColis]);
    }

    public function getlisteColis() {
        $dataColis=colis::all();
        return view('liste-colis',['donnees'=>$dataColis]);
    }
    public function deleteColis($id) {
        $dataColisDelete=colis::find($id);
        $dataColisDelete->delete();
        $DataColis=colis::all();
        return view('liste-colis',['donnees'=>$DataColis]);
    }
    
}
