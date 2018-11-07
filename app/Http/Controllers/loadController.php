<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loadController extends Controller
{

    // public function __invoke() {

    // 	if (isset($_GET["jeff"])) {
    // 		return 'do you know de wey? ' . $_GET["jeff"];
    // 	} 
    // }

    public function index(Request $request)
    {
        if ($request->isMethod('post')){              

            $view = $request->input('view');
            $uuid = $request->input('uuid');

            return view($view);


        } else {
        	return "Stop hacking.";
        }

    }


    public function app() {

    	return view('app');

    }


}
