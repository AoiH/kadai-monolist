<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $items = Item::orderBy('updated_at', 'desc')->paginate(20);
        return view('welcome',[
            'items' => $items,
            ]);
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
