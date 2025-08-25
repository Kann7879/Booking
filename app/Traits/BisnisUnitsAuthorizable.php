<?php

namespace App\Traits;

trait BisnisUnitsAuthorizable{
    public function __construct(){
        $this->middleware('permission:Bisni Unit Access')->only("index","show");
        $this->middleware('permission:Bisni Unit Create')->only("create","store");
        $this->middleware('permission:Bisni Unit Update')->only("edit","update");
        $this->middleware('permission:Bisni Unit Delete')->only("destroy");
    }
}
