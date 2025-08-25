<?php

namespace App\Traits;

trait ProfilesAuthorizable{
    public function __construct(){
        $this->middleware('permission:Profile Access')->only("index","show");
        $this->middleware('permission:Profile Create')->only("create","store");
        $this->middleware('permission:Profile Update')->only("edit","update");
        $this->middleware('permission:Profile Delete')->only("destroy");
    }
}
