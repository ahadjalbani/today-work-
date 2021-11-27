<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Welcomecontroller extends Controller
{
    public function welcome()

    {
        $data = DB::table('profile')->get();
        foreach($data as $d){
            echo $d->name;
        }

        dd($data);
        return view ('welcome',compact('data'));
    }
}
