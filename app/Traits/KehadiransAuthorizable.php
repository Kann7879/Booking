<?php

namespace App\Traits;

trait KehadiransAuthorizable{
    public function __construct(){
        $this->middleware('permission:Kehadiran Access')->only("index","show");
        $this->middleware('permission:Kehadiran Create')->only("create","store");
        $this->middleware('permission:Kehadiran Update')->only("edit","update");
        $this->middleware('permission:Kehadiran Delete')->only("destroy");
    }
}
