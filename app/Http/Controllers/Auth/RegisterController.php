<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTPMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerUser(Request $data)
    {
        $data = $data->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required',
            'phone' => 'required|max:11|unique:users',
            'address' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'status' => '1',
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);

        $this->sendEmail($user);
        return redirect()->back()->with('email', $user->email);
    }

    public function sendEmail($user)
    {
        $to = $user->email;
        try {
            return Mail::send('emails.otp', ['user' => $user], function ($message) use ($to, $user) {
                $message->to($to)
                    ->subject('FBSO Registraton OTP');
            });
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function otpconfirm($email)
    {
        $user = User::where('email', $email)->first();
        $user->status = '1';
        $user->save();
        $to = $user->email;
        try {
            $email = Mail::send('emails.confirm', ['user' => $user], function ($message) use ($to, $user) {
                $message->to($to)
                    ->subject('FBSO Account Successfully');
            });
            if ($email) {
                return view('emails.confirm', compact('user'));
            } else {
                return "Problem in Email Sending";
            }
        } catch (Exception $ex) {
            return $ex;
        }
    }
    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('status', '1')->first();
        if ($user) {
            return redirect()->back()->with('message', 'User Not Active');
        } else {
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/home');
            } else {
                return redirect()->back()->with(['error' => 'Invalid credentials']);
            }
        }
    }
}
