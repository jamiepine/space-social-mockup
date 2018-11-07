<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accountingTransactions;
use DB;

class accountsController extends Controller
{


public function newTransaction(Request $request) {

    // $this->validate($request, [
    // 		'date' => 'required',
    //         'name' => 'required',
    //         'category' => 'required',
    //         'account' => 'required',
    //         'type' => 'required',
    //         'amount' => 'required'
   	// ]);


	if ($request->isMethod('post')){    	

        $data = [
            'date' => $request->input('transactionDate'),
            'name' => $request->input('transactionName'),
            'category' => $request->input('transactionCategory'),
            'account' => $request->input('transactionAccount'),
            'type' => $request->input('transactionType'),
            'amount' => $request->input('transactionAmount')
        ];


        // DB::table('accountingTransactions')->insert([

        // 	'date' => $date, 
        // 	'name' => $name, 
        // 	'category' => $category, 
        // 	'account' => $account, 
        // 	'type' => $type, 
        // 	'amount' => $amount 

        // ]);

        return 123;


    } else {
    	return "Stop hacking.";
    }
}





}
