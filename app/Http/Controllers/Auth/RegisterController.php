<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\CustomEmail;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;

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
    protected $redirectTo = '/customer/dashboard';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole('customer');

        $name = $data['name'];
        $password = $data['password'];
        try {
            $customerMessage = "
        <p>Dear {$name},</p>

        <p>Thank you for creating your account at <strong>Bloxt</strong>.</p>

        <p>Please Login to our CRM Using your email and {$password} to track your applications.</p>

        <p>Kind regards,<br>
        <strong>The Bloxt Team</strong></p>
    ";


            Mail::to($data['email'])->send(new CustomEmail(
                [
                    'subject' => 'Thank your for Registering at Bloxt LTD',
                    'message' => $customerMessage,
                ],
                'Thank your for Registering at Bloxt LTD'
            ));

            return $user;


        } catch (Exception $e) {

            return $user;
            ;
        }
    }

}
