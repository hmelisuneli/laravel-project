<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\ServicesAPI\HomeServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $HomeServices;

    public function __construct(HomeServices $homeServices){
        $this ->HomeServices = $homeServices;
    }


    public function index( ) {
      $users =$this->HomeServices->getAll();


        return response()->json([
          'status'=> true,
          'users'=>BlogResource::collection($users)
      ]) ;
    }
}
