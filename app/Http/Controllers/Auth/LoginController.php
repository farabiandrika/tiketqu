<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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

        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $logged = 'web';
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('auth.login_tanpa_modal',compact('logged'));
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|min:4',
            'password' => 'required|string|min:8',
        ]);

        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        if (auth()->attempt($login)) {
            return redirect()->route('/');
        } else {
            Alert::error('ERROR', 'Username/E-mail atau Password Salah Silahkan Masukkan Kembali');
            return redirect()->route('login');
        }

    }
}
