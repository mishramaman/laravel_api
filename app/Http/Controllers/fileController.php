<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{
    function upload(Request $req){
        $result=$req->file('file')->store('apiDOcs');
        return ['result'=>$result];
    }
}
