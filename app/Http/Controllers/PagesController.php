<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main(){

        return view('main');
    }

    public function about(){
        $title = 'Patrick';
        $names = ['Patrick', 'Maine'];
        return view('about',  ['names' => $names]);;
    }
}
