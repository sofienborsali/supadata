<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
class AdminController extends Controller
{
    public function GetAdmin(){
        $admin = Admin::all();
        return view('admin-list',['data'=>$admin]);
    }
    public function AddAdmin(Request $req){
        $admin = new Admin;//object from model
        $admin->name= $req->name;
        $admin->login= $req->login;
        $admin->email= $req->email;
        $admin->password= $req->password;
        
       
        $admin->save();
        return redirect('admin-list')->with("message","l'admin a ete bien ajouter");
    }
    
   
    public function deleteadmin($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect("admin-list")->with("message","l'admin a été bien supprimé");


    }


    public function GetAdminById($id){
        $admin = Admin::find($id);
        return view("admin-modif",["data"=>$admin]);
    }


    public function UpdateAdmin(Request $req){
        $admin = Admin::find($req->id);
        $admin->name= $req->name;
        $admin->login= $req->login;
        $admin->email= $req->email;
        $admin->password= $req->password;
        
       
        $admin->save();
        return redirect('/admin-list')->with("message","l'admin a été bien modifier");
    }
}