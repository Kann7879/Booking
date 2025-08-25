<?php

namespace App\Traits;

trait KantorsAuthorizable{
    public function __construct(){
        $this->middleware('permission:Kantor Access')->only("index","show");
        $this->middleware('permission:Kantor Create')->only("create","store");
        $this->middleware('permission:Kantor Update')->only("edit","update");
        $this->middleware('permission:Kantor Delete')->only("destroy");
    }
}
