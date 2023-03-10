<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginUserController extends Controller
{
    /**
     * @htmle form
     */
    public function loginForm()
    {
        return view('Auth.login');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    // public function login(Request $request)
    // {
    //     if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){
    //         $user = Auth::user();
    //         $success['token']     =  $user->createToken('user')->plainTextToken;
    //         $success['tokenName'] =  "user";
    //         $success['name']      =  $user;
    //         return $this->sendResponse($success, 'تم تسجيل الدخول بنجاح.', 200);
    //     }
    //     else{
    //         return $this->sendError('Unauthorised.', ['error'=>'بيانات غير صحيحة'], 401);
    //     }
    // }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'admin') {
                $user = Auth::user();
                // $success['token']     =  $user->createToken('admin')->plainTextToken;
                // $success['tokenName'] =  "admin";
                $success['name']      =  $user;
                return redirect()->route('users.index');
            }else if (auth()->user()->role == 'user') {
                $user = Auth::user();
                // $success['token']     =  $user->createToken('user')->plainTextToken;
                // $success['tokenName'] =  "user";
                $success['name']      =  $user;
                return redirect()->route('users.index');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }

    }

    /**
     * from ChatGPT
     */
    // public function login2(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $remember = $request->filled('remember');

    //     if (Auth::attempt($credentials, $remember)) {
    //         // If the user selected "remember me", generate and store an access token
    //         if ($remember) {
    //             $user = Auth::user();
    //             $user->access_token = Str::random(60);
    //             $user->save();
    //         }

    //         return redirect()->intended('/');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }
}
