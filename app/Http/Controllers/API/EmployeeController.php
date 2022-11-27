<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $emp=employees::all();
        return response()->json([
            'success'=>true,
            'message'=>$emp
        ]);
    }
}
