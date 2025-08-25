<?php

namespace App\Traits;

trait ListLibursAuthorizable{
    public function __construct(){
        $this->middleware('permission:List Libur Access')->only("index","show");
        $this->middleware('permission:List Libur Create')->only("create","store");
        $this->middleware('permission:List Libur Update')->only("edit","update");
        $this->middleware('permission:List Libur Delete')->only("destroy");
    }
}
