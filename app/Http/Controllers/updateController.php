<?php

// This file is responsible for creating and fetching individual updates

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Functions;
use Auth;

// Models
use App\updates;
use App\User;
use App\Models\UserData;



class updateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $update = new updates;
            $functions = new Functions;
            $user = Auth::user();

            $updateFormElements = $request->input('formElements');

            // User Input
            $update->update_content = $updateFormElements['update_content'];
        
            // Generated Values
            $update->uuid = $functions->generateUpdateID();
            $update->author_id = $user->user_id;

            // Save & Return
            $update->save();


            // call show() function
            return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = new User;
        $UserData = new UserData;
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
