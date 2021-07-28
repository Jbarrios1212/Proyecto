<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
   
    public function index()
    {
        /*$curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
        $data = curl_exec($curl)*/

        $url = "https://jsonplaceholder.typicode.com/photos";   
        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url);   
        $service = curl_exec($ch);   
       // return dd(json_decode($apiService));;
        $apiService=json_decode($service);
        
        return view('apiService.index',compact('apiService'));
        /*$personas=Persona::all();
        return view('persona.index',compact('personas'));*/
    }
}
