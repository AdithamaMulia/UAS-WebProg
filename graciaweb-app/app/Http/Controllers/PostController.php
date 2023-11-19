<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "List of all posts will be here...";
    }

    public function create()
    {

        return "Create form will be here...";
    }

    public function store(Request $request)
    {

        
    }

    /**Display the specified resource... */
    public function show($id)
    {
        return "Individual post wil be here... Post ID:" . $id;
    }

    public function edit($id)
    {
        return "Edit form will be here... Post ID" . $id;
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
    
}
