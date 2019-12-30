<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Mail\AdminResetPassword;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function postLogin(Request $request) {
		// dd($request->all());
        $rememberme = $request->rememberme == 1?true:false;
		if (admin()->attempt(['email' => $request->email, 'password' => $request->password], $rememberme)) {
			return redirect('admin');
		} else {
			session()->flash('error', trans('admin.inccorrect_information_login'));
			return redirect(aurl('login'));
		}
	}
	public function logout() {
		admin()->logout();
		return redirect(aurl('login'));
	}

	public function forgotPassword()
	{
		return view('admin.forgotPassword');
	}
	
	public function resetPassword(Request $request)
	{
		$admin = Admin::where('email',$request->email)->first();
		if (!empty($admin)) {
			$token = app('auth.password.broker')->createToken($admin);
			$data = DB::table('password_resets')->insert([
				'email' => $admin->email,
				'token' => $token,
				'created_at' => Carbon::now(),
			]);
			Mail::to($admin->email)->send(new AdminResetPassword(['data'=>$admin,'token'=>$token]));
			session()->flash('success', 'Mail Send Successfuly');
			return back();
		}else {
			session()->flash('error', 'This Email is not vaild');
			return back();
		}
	}

	public function resetWithTokenPassword($token)
	{
		$checkToken = DB::table('password_resets')
						->whereToken($token)
						->where('created_at','>',Carbon::now()->subHour(2))->first();
		if (!empty($checkToken)) {
			return view('admin.resetPassword', compact('checkToken'));
		}else{
			return redirect(aurl('forgot/password'));
		}
	}

	public function storeNewPassword($token,Request $request)
	{
        $request->validate([
			'email' => 'required',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',
		]);
		$checkToken = DB::table('password_resets')
						->whereToken($token)
						->where('created_at','>',Carbon::now()->subHour(2))->first();
        if (!empty($checkToken)) {
            $admin = Admin::where('email', $checkToken->email)
                        ->update([ 'email'=>$checkToken->email, 'password'=>bcrypt($request->password)]);
            DB::table('password_resets')->whereEmail($request->email)->delete();
			// admin()->login($admin);
			admin()->attempt(['email' => $checkToken->email, 'password' => $request->password], true);
            return redirect(aurl());
        }else {
			return redirect(aurl('forgot/password'));
		}
	}
}
