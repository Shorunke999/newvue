<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apiController extends Controller
{
   public function apiFunction(){
      $dataResource = \App\Http\Resources\apiResources::collection(\App\Models\User::all());
      return $dataResource;
   }
    
}
