<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create(){
        return view('groups.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:15',
            'detail' => 'max:200',
            'password' => 'required',
        ]);
        $group = $request->user()->groups()->create($request->all());
        return redirect(route('home'));
    }
}
