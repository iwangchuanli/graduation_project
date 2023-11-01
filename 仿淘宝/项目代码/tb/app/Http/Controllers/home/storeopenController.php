<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class storeopenController extends Controller
{
    public function sold(){
        return view('home/storeopen/sold');
    }

    public function soldq(){
        return view('home/storeopen/soldq');
    }

    public function solds(){
        return view('home/storeopen/solds');
    }
}
