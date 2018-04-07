<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    //

    public function showRaffaral(Request $r){

        $clientId =  $r->hiddennumber;
        return view('clintside')
            ->with('clientid', $clientId);
    }

    public function saveEmail(Request $r){



        $email =  $r->example_emailBS;
        $a = json_decode( $email, true );
        foreach ($a as $value){
            echo $value.'<br>';
        }


    }
}
