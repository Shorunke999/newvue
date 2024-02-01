<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\locationModel;

class apiController extends Controller
{
   public function oneTimeRegister(Request $request){
      $request->validate([
         'email'=>'required',
         'password' => 'required',
         'name'=>'required',
      ]);
      
      $data =\App\Models\User::where('email',$request->email)->first();
      if(empty($data)){
         $user = \App\Models\User::create($request->all());
         auth()->login($user);
         return response()->json(['msg'=>'user is authenticated']);
      }else{
         return response()->json(['msg'=>'user already exist']);
      }
   }
   public function searchLocation(String $info){
      $data = locationModel::where('state','LIKE','%'.$info.'%')
      ->orWhere('city','LIKE','%'.$info.'%')
      ->get();
      return response()->json(['data'=>$data]);
   }
    
}
