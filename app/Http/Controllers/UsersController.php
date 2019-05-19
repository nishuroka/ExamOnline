<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class UsersController extends Controller
{
    public function index(){
        return view('index');
    }

     public function feedback(Request $request){
        Feedback::create(request()->all());

        
        return response()->json(['success'=>'Thanks for contacting us. We will get to you soon']);
    }
    
}
