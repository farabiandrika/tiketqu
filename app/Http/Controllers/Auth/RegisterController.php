<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        if (Auth::guard('web')->check()) {
            $logged = 'web';
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('auth.register_tanpa_modal',compact('logged'));
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
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto_user' => ['nullable|image|mimes:png,jpeg,jpg'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    //menyimpan data
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required|string|max:100',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8|confirmed',
            'foto_user' => 'nullable|image|mimes:png,jpeg,jpg'
        ]);

        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $filename = time() . $request->nama . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/users', $filename);

            $product = User::create([
                'no_identitas'   => $request->no_identitas,
                'username'       => $request->username,
                'nama'           => $request->nama,
                'tanggal_lahir'  => $request->tanggal_lahir,
                'jenkel'         => $request->jenkel,
                'alamat'         => $request->alamat,
                'email'          => $request->email,
                'password'       => Hash::make($request->password),
                'no_hp'          => $request->no_hp,
                'foto_user'      => $filename,
            ]);
            return redirect(route('login'));
        }

        else{
            $product = User::create([
                'no_identitas'   => $request->no_identitas,
                'username'       => $request->username,
                'nama'           => $request->nama,
                'tanggal_lahir'  => $request->tanggal_lahir,
                'jenkel'         => $request->jenkel,
                'alamat'         => $request->alamat,
                'email'          => $request->email,
                'password'       => Hash::make($request->password),
                'no_hp'          => $request->no_hp,
            ]);
            return redirect(route('login'));
        }
    }



  //mengedit data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'foto_user' => 'required|image|mimes:png,jpeg,jpg,' . $id
        ]);
        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $filename = time() . $request->nama . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $update = User::find($id);
            $update->update([
                'no_identitas'   => $request->no_identitas,
                'username'       => $request->username,
                'nama'           => $request->nama,
                'tanggal_lahir'  => $request->tanggal_lahir,
                'jenkel'         => $request->jenkel,
                'alamat'         => $request->alamat,
                'email'          => $request->email,
                'password'       => Hash::make($request->password),
                'no_hp'          => $request->no_hp,
                'foto_user'      => $filename,
            ]);
            return redirect(route('home'))->with(['success' => 'User Ditambahkan']);
        }
    }
}
