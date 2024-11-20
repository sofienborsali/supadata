<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Contact;
class ContactController extends Controller
{
    public function GetContact(){
        $contact= Contact::all();
        return view("/contact",['data'=>$contact]);
    }
    public function GetContactReadEamil($id){
        $contact= Contact::find($id);
        $contact->status = 1;
        $contact->save();
        
        return view("/read-email",['data'=>$contact]);
        
    }
    public function countnotif(){
        $counts = Contact::where('status', NULL)->count();
        return response()->json($counts);
    }
    
}