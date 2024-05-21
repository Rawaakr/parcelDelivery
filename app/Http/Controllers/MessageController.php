<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    public function getMsg() {
        $DataMsg=message::all();
        return view('liste-message',['donnees'=>$DataMsg]);
    }
    public function deleteMsg($id) {
        $dataMsgDelete=message::find($id);
        $dataMsgDelete->delete();
        $DataMsg=message::all();
        return view('liste-message',['donnees'=>$DataMsg]);
    }
}
