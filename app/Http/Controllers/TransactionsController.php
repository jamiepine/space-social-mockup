<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accountingTransactions;
use DB;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return accountingTransactions::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    // $this->validate($request, [
    //      'date' => 'required',
    //         'name' => 'required',
    //         'category' => 'required',
    //         'account' => 'required',
    //         'type' => 'required',
    //         'amount' => 'required'
    // ]);
        
            // $data = [
            //     'date' => $request->input('transactionDate'),
            //     'name' => $request->input('transactionName'),
            //     'category' => $request->input('transactionCategory'),
            //     'account' => $request->input('transactionAccount'),
            //     'type' => $request->input('transactionType'),
            //     'amount' => $request->input('transactionAmount')
            // ];

            // DB::table('accountingTransactions')->insert([

            //  'date' => $date, 
            //  'name' => $name, 
            //  'category' => $category, 
            //  'account' => $account, 
            //  'type' => $type, 
            //  'amount' => $amount 

            // ]);

            $transaction = new accountingTransactions;

            $formElements = $request->input('formElements');

            // $transaction->date = $formElements['transactionDate'];
            // $transaction->name = $formElements['transactionName'];
            // $transaction->category = $formElements['transactionCategory'];
            // $transaction->account = $formElements['transactionAccount'];
            // $transaction->type = $formElements['transactionType'];
            // $transaction->amount = $formElements['transactionAmount'];

            // $transaction->save();

            return $formElements;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $transactions = accountingTransactions::all();

        return view('accounting.transactions')->with('transactions', $transactions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
