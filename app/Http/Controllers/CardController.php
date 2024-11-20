<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
class CardController extends Controller
{
  public function GetCard()
  {
      $card = Card::all();
      return view("card-list" , ['data'=>$card]);

  
  }
    
public function AddCard(Request $req){
  $card = new Card;//object from model
  $card->name = $req->name;
  $card->job_title = $req->job_title;
  $card->department = $req->department;
  $card->company_name = $req->company_name;
  $card->email = $req->email;
  $card->telephone = $req->telephone;
  $card->url_company = $req->url_company;
  $card->address = $req->address;
  $card->save();
  return redirect("/card-list")->with("message","la card a été bien ajouter");


  }


public function DeleteCard($id){
  $card = Card::find($id);
  $card->delete();
  return redirect("/card-list")->with("message","l'admin a été bien supprimé");
  }

public function GetCardById($id){
  $card = Card::find($id);
  return view("card-modif",['data'=>$card]);
  }



public function updatecard(Request $req){
  $card= Card::find($req->id);
  $card->name = $req->name;
  $card->job_title = $req->job_title;
  $card->department = $req->department;
  $card->company_name = $req->company_name;
  $card->email = $req->email;
  $card->telephone = $req->telephone;
  $card->url_company = $req->url_company;
  $card->address = $req->address;
  $card->save();
  return redirect("/card-list")->with("message","l'admin a été bien Modifier");


}
public function search(Request $request)
{
    $query = $request->input('query');

    if ($query) {
        $data = Card::where('name', 'like', '%' . $query . '%')
                     ->orWhere('job_title', 'like', '%' . $query . '%')
                     ->orWhere('url_company', 'like', '%' . $query . '%')
                     ->orWhere('department', 'like', '%' . $query . '%')
                     ->orWhere('email', 'like', '%' . $query . '%')
                     ->orWhere('telephone', 'like', '%' . $query . '%')
                     ->get(); 
    } else {
        $data = Card::all(); 
    }

    return response()->json($data);
}
}