<?php

use App\Core\Controller;
use App\Model\Don;
use App\Helper\Unsplash;


class produksi extends Controller
{
  public function index(){
    $data=[];
    View("checksheet/produksi",$data);
  }
  
}
  