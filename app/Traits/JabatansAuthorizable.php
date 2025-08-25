<?php

namespace App\Traits;

trait JabatansAuthorizable{
    public function __construct(){
        $this->middleware('permission:Jabatan Access')->only("index","show");
        $this->middleware('permission:Jabatan Create')->only("create","store");
        $this->middleware('permission:Jabatan Update')->only("edit","update");
        $this->middleware('permission:Jabatan Delete')->only("destroy");
    }
}
