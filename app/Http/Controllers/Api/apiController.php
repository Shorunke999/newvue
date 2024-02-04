<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\locationModel;

use Illuminate\Support\Facades\Http;

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
   public function weather(Request $request){
      try{
          $response = Http::get('http://api.openweathermap.org/data/2.5/onecall', [
         'lat' => $request->lat,
         'lon' => $request->long,
         //'exclude' => $request->exclude,
         'appid' => '4c806a0a790e087fc77ffe1bbed25765',
         ]);
         return $response->json();
      }catch(\Exception $e){
         return $response()->json(['error'=>$e]);
      }
     
      }
      
}
