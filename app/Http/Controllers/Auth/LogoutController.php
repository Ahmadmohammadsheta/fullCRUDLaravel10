<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
    * Logout function
    *
    * @return \Illuminate\Http\Response
    */
   public function logout(Request $request)
    {
            Auth::logout();
            return redirect('/login')->with(['message' => 'تم تسجيل الخروج'], 200);

        $logout = $request->user()->currentAccessToken()->delete(); // logout from this device
        // $logout = $request->user()->tokens()->delete(); //  logout from all devices
        // $logout = auth()->logout();
        if ($logout) {
            return view('index', ['message' => 'تم تسجيل الخروج'] , 200);
        } else {
            return response()->json(['message' => 'فشل تسجيل الخروج'], 200);
        }
    }


    protected function loggedOut(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return redirect('/login');
    }
}
