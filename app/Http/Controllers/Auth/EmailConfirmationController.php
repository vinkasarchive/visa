<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\EmailToken;

class EmailConfirmationController extends Controller
{

  /**
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function confirm(Request $request) {
    $token = $request->input('token');
    $token = EmailToken::where('token', $token)->first();
    if($token == null) {
      abort(401, "Invalid token");
    }
    $token->confirm();
    return redirect('/');
  }

  /**
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function showConfirmationWindow(Request $request, $token) {
    return view('auth.emails.confirmation')->with('token', $token);
  }

}
