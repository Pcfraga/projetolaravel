<?php 

namespace App\Http\Controllers;

use illuminate\Http\Request;
use illuminate\support\Facades\Auth;

class userController extends Controller

{
public function login(request$request)

{
$credential = $request->validate([
'email' => 'required|$email',
'password' => 'required|min:8']);

if(auth::attempt($credential)){
    $request->session()->regenerate();
    return redirect()->intended('auth.paginainicial');
}

return back()-> withErrors(['auth_errors' => 'Usuario ou enha invalidos!!!'])->onlyInput('email');

}
 public function logout()
{

}

public function showLogin()

{
return view('user_login');
}

}