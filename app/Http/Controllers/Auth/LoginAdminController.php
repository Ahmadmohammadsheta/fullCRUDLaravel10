<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait as TraitResponseTrait;
use App\Http\Traits\ImageProccessingTrait as TraitImageProccessingTrait;

class LoginAdminController extends Controller
{
    use TraitImageProccessingTrait;
    use TraitResponseTrait;

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
                return redirect()->route('admins.admins.index');
            }else if (auth()->user()->role == 'user') {
                return redirect()->route('admins.users.index');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }

    }
}
