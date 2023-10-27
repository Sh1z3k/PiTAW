<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function index(){
        return 'Pierwsza strona';
    }
 
 
public function show(){
    // testsetgset
    $array = [
        1,2,3,4,5
    ];
    dd($array);
    return 'test';
    }
}