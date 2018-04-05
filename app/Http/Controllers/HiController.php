<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiController extends Controller
{
   function hi(){

   	$name = ["deepak","ramesh","test"];

   	$mobno = [8846854,4486454,667846];
   	 return view('hello')->with(["first" => $name, "no" => $mobno]);
   	 return view('hello')->withfirst($name)->withno($mobno);
   	// 	$data = "my name is deepak";
   	// return view('hello')->withname($data);

   
   	}
}
