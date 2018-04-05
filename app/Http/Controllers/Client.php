<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    //

    public function showRaffaral(){

        return view('clintside');
    }

    public function saveEmail(Request $r){



        $email =  $r->example_emailBS;
//        return $email[0];

//        for ($i = 0 ; $i<count($email); $i++){
//            echo $email[$i];
//        }

        return json_decode($email);

    }
}
