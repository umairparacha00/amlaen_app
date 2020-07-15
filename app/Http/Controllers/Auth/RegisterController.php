<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Point;
use App\UserMembership;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
			'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'sponsor' => ['required','numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
         $user = User::create([
        	'account_id' => mt_rand(100000000000000, 9999999999999999),
			'username' => $data['username'],
			'name' => $data['name'],
            'email' => $data['email'],
            'sponsor' => $data['sponsor'],
            'password' => Hash::make($data['password']),
        ]);
         Point::create([
         	'user_id' => $user->id,
			'main_points' => 0,
			'group_points' => 0,
			'mall_points'  =>0,
			'gold_pack' => 0,
			'silver_pack' => 0,
		 ]);
         UserMembership::create([
         	'user_id' => $user->id,
			 'membership_id' => 1,
		 ]);
         return $user;
    }
}
