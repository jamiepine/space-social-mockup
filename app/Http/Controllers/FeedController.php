<?php

// This file is responsible for populating the user feed

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\updates;
use App\Functions;
use Auth;

class FeedController extends Controller
{
    // return $_GET["jeff"];
    // return "Jeff";

    public function __invoke() {

    	// if (isset($_GET["jeff"])) {
    	// 	return 'do you know de wey? ' . $_GET["jeff"];;
    	// } 


    }

    public function index() {

    	// $jeff = "memes";

    	// $vars = ['jeff' => $jeff];

    	// if (isset($_GET["o"])) {
    	// 	$o = $_GET["o"];
    	// 	array_push($vars, $o);
    	// };

        if (Auth::guest()) {
        return view('landing');
        }

    	return view('feed');

    }

    public function getUpdates() {

        $updates = updates::paginate(50);

        return view('update')->with('updates', $updates);

    }

}
