<?php

namespace App\Traits;

trait GajisAuthorizable{
    public function __construct(){
        $this->middleware('permission:Gaji Access')->only("index","show");
        $this->middleware('permission:Gaji Create')->only("create","store");
        $this->middleware('permission:Gaji Update')->only("edit","update");
        $this->middleware('permission:Gaji Delete')->only("destroy");
    }
}
