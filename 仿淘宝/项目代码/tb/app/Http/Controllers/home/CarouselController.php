<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{

   public function carousel(){
		$carousel=DB::table('img')->get();
		
		return view('home.index',['carousel'=>$carousel]);
   }
}
