<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beloved;

class belovedpageController extends Controller
{
    public function getBelovedpage($slug)
    {
    	$blpage = Beloved::where('slug','=',$slug)->first();
     	return view('bpage.single', ['blpage' => $blpage]);
    }

    public function getDaystoGo(Beloved $blpage)
    {
    	$end = Carbon::parse($blpage->weddingDate);
    	$now = Carbon::now();
		$daystogo = $end->diffInDays($now);
		return $daystogo;
    }
}
