<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisterUserController extends Controller
{
    /**
     * @htmle form
     */
    public function registerForm()
    {
        return view('Auth.register');
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if ($user = User::create($input)) {
            // $success['token'] =  $user->createToken('user')->plainTextToken;
            // $success['tokenName'] =  DB::table('personal_access_tokens')->orderBy('id', 'DESC')->select('name')->where(['tokenable_id'=>$user->id])->first();
            $success['name'] =  $user;
            return view('users.users.index')->with($success, 'تم التسجيل بنجاح.');
        } else {
            return back()->with(['message' => "unauthenticated", ], 422);
        }
    }
}
