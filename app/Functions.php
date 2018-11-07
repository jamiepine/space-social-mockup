<?php

namespace App;

use DB;

class Functions 
{
    public function generateUserID() {

    	$userID = rand(1000000000000000,9999999999999999);

    	return $userID;

    }

    public function generateUpdateID() {

    	$updateID = rand(1000000000000000,9999999999999999);

    	return $updateID;

    }    



	public static function theTime($time)
	{
		

	    $time = time() - strtotime($time); // to get the time since that moment
	    $time = ($time<1)? 1 : $time;
	    $tokens = array (
	        31536000 => 'year',
	        2592000 => 'month',
	        604800 => 'week',
	        86400 => 'day',
	        3600 => 'hour',
	        60 => 'minute',
	        1 => 'second'
	    );

	    foreach ($tokens as $unit => $text) {
	        if ($time < $unit) continue;
	        $numberOfUnits = floor($time / $unit);
	        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
	    }

	}


}
