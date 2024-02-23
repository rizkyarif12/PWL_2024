<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    // public function greeting(){
    //     return view('blog.hello',['name'=>'Rizky Arif']);
    // }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Rizky Arif')
        ->with('occupation','Arsitek');
    }
}
