<?php

namespace App\Http\Controllers;

use App\Discountlist;
use App\Referemail;
use Illuminate\Http\Request;

class Client extends Controller
{
    //

    public function showRaffaral(Request $r){

        $clientId =  $r->clt;
        $sendinfoid = $r->id;
        return view('clintside')
            ->with('clientid', $clientId)
            ->with('sendinfoid', $sendinfoid);
    }

    public function saveEmail(Request $r){


        $offerid= $r->id;
        $clientId= $r->clt;

        $email =  $r->example_emailBS;
        $a = json_decode( $email, true );

        $discountlist = new Discountlist();
        $discountlist->fksendinfoid= $offerid;
        $discountlist->datetime= date(now());
        $discountlist->save();

        foreach ($a as $value){
            $referemail = new Referemail();
            $referemail->email = $value;
            $referemail->fkdiscountlistid = $discountlist->discountlistid;
            $referemail->save();
        }

        return view('email.thankyou');
    }

    public function reffaralEmail(){

        $discountlist = Discountlist::select('*','sendinfo.*','clientinfo.*', 'sendinfo.datetime as sdate', 'discountlist.datetime as ddate',  'clientinfo.email as cemail')
            ->leftjoin('sendinfo','sendinfo.sendinfoid','=','discountlist.fksendinfoid')
            ->leftjoin('clientinfo','clientinfo.clinetinfoid','=','sendinfo.sentto')
            ->get();

        $referemail = Referemail::select('*', 'referemail.email as remail')->get();
        return view('showreffaral')
            ->with('dislist', $discountlist)
            ->with('referemail', $referemail);

    }
}
