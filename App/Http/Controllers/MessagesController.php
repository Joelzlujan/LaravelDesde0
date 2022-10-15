<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required' => __('I need your name')
        ]);
        return 'Datos validados';
    }
}
