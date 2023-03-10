<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Traits\ImageProccessingTrait as TraitImageProccessingTrait;
use App\Http\Traits\ResponseTrait as TraitResponseTrait;

class RegisterAdminController extends Controller
{
    use TraitImageProccessingTrait;
    use TraitResponseTrait;

    /***
     * Admin register form
     */
    public function registerForm()
    {
        return view('auth.admins.register');
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(AdminRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if ($admin = Admin::create($input)) {
            $success['token'] =  $admin->createToken('admin')->plainTextToken;
            $success['tokenName'] =  DB::table('personal_access_tokens')->orderBy('id', 'DESC')->select('name')->where(['tokenable_id'=>$admin->id])->first();
            $success['name'] =  $admin;
            return view('admins.admins.index')->with($success, 'تم التسجيل بنجاح.');
        } else {
            return back()->with([
                'message' => "unauthenticated",
            ], 422);
        }
    }

}
