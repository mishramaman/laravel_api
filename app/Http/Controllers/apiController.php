<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class apiController extends Controller
{
    function getData(){
        return  ['name'=> 'Aman Mishra','email'=>'mishramaman@gmail.com'];
    }

    function getApi($id=null){
        return $id?Service::find($id):Service::all();
    }

    function postApi(Request $req){
        $service=new Service();
        $service->service=$req->service;
        $service->price=$req->price;
        $service->servicesincluded=$req->servicesincluded;
        $result=$service->save();
        return $result;

    }

    function putApi(Request $req){
        $service=Service::find($req->id);
        $service->service=$req->service;
        $service->price=$req->price;
        $service->servicesincluded=$req->servicesincluded;
        $result=$service->save();
        return $result;

    }

    function delete(Request $req){
        $service=Service::find($req->id);
        $service->delete();
    }

    
    function search($service){
        return Service::where("service","like","%".$service."")->get();
    }
}


