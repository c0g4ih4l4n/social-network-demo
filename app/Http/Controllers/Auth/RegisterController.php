<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


// model
use App\Profile;
use App\Wall;

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
    protected $redirectTo = '/home';

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
            'name_register' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password_register' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $profile = new Profile();
        $profile->name = $data['name_register'];
        $profile->email = $data['email_register'];
        $profile->save();

        $wall = new Wall();
        $wall->save();

        return User::create([
            'name' => $data['name_register'],
            'email' => $data['email_register'],
            'password' => bcrypt($data['password_register']),
            'profile_id' => $profile->id,
            'wall_id' => $wall->id,
        ]);
    }
}
