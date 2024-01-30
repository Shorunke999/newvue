<?php
namespace  App\helper;
class apiClass
{
    public function getDatas(){
        $dataResource = App\Resources\apiResources::collection(App\Models\User::all());
        return $dataResource;
    }
}