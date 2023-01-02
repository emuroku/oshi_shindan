<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function display(){
        $title = '推し診断';
        return view('top', [
            'title' => $title,
        ]);
    }
}
