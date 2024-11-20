<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Client;
class ClientController extends Controller
{
    public function GetClient(){

        $client = Client::all();
        return view("client-list" , ['data'=>$client]);
    }
//function for add new admin

    public function AddClient(Request $req){
        $client = new Client; //object from model

        $client->name = $req->name;
        $client->login = $req->login;
        $client->email = $req->email;
        $client->password = $req->password;
        $client->save();

        return redirect("client-list")->with("message","la client a été bien ajouter");

    }

    
    public function DeleteClient($id){
        $client = Client::find($id);
        $client->delete();
        return redirect("client-list")->with("message","le client a été bien supprimé");

    }

    public function GetClientById($id){
        $client = Client::find($id);
        return view("client-modif",["data"=>$client]);


    }
    public function ModifClients(Request $req){
        $client = Client::find($req->id);
        $client->name = $req->name;
        $client->login = $req->login;
        $client->email = $req->email;
        $client->password = $req->password;
        $client->save();

        return redirect("client-list")->with("message","la client a été bien Modifier");

    }


    }

