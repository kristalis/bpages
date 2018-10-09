<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Requests\ContactFormRequest;
use App\User;

class ContactController extends Controller
{
    public function sendRSVP(ContactFormRequest $request)
	{        
	//send the admin an notification
		$user = \Auth::user();
 		$user->notify(new InboxMessage($request));
		// redirect the user back
		return redirect()->back()->with('message', 'Thanks for joining us on our big day! Stay Blessed');
	}
}
