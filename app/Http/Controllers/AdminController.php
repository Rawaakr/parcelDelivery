<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;

class AdminController extends Controller
{
    public function getAdmin() {
        $dataAdmin=User::all();
        return view('liste-admin',['donnees'=>$dataAdmin]);
    }

    public function getClient() {
        $dataClient=User::all();
        return view('liste-client',['donnees'=>$dataClient]);
    }

    public function deleteAdmin($id) {
        $dataAdminDelete=User::find($id);
        $dataAdminDelete->delete();
        $DataAdmin=User::all();
        return view('liste-admin',['donnees'=>$DataAdmin]);
    }
    public function deleteClient($id) {
        $dataClientDelete=User::find($id);
        $dataClientDelete->delete();
        $DataClient=User::all();
        return view('liste-client',['donnees'=>$DataClient]);
    }

    public function getAdminId($id){
        $dataAdminShow=User::find($id);
        return view('/modif-admin',['donnes'=>$dataAdminShow]);
    }

    public function updateAdmin(Request $req){
        $admin=User::find($req->id);
        $admin->name=$req->name;
        $admin->prenom=$req->prenom;
        $admin->login=$req->login;
        $admin->email=$req->email;
        $admin->password=$req->password;
        $admin->save();
        return redirect('/liste-admin');
    }
}
