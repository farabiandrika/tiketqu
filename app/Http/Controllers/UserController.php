<?php

namespace App\Http\Controllers;

use App\User;
use App\Entity\Event;
use App\Entity\Transaksi;
use App\Entity\Pembeli;
use App\Entity\Tiketbeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**


     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */


    //mengedit data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'no_identitas'  => 'required|integer|min:8',
            'username'      => 'required|string|min:4|max:14',
            'nama'          => 'required|string|min:3|max:100',
            'alamat'        => 'required|string|min:6|max:255',
            'jenkel'        => 'required',
            'tanggal_lahir' => 'required',
            'no_hp'         => 'required',
            'email'         => 'required|string|email|max:255',
            'profesi'       => 'nullable|string|min:4|max:25',
            'status'        => 'nullable|string|min:5|max:255'
        ]);

        $update = User::find($id);
        $update->update([
            'no_identitas'   => $request->no_identitas,
            'username'       => $request->username,
            'nama'           => $request->nama,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'jenkel'         => $request->jenkel,
            'alamat'         => $request->alamat,
            'email'          => $request->email,
            'no_hp'          => $request->no_hp,
            'profesi'        => $request->profesi,
            'status'         => $request->status,

        ]);
        $update->save();
        Alert::success('Berhasil Update', 'Data Diperbaharui');
        return redirect(route('home'));
    }

    //mengedit foto user
    public function ufoto(Request $request, $id)
    {
        $this->validate($request, [
            'foto_user'     => 'nullable|image|mimes:png,jpeg,jpg'
        ]);

        $update = User::find($id);


        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/users', $filename);
            $update->foto_user = $filename;
        }
        $update->save();
        Alert::success('Berhasil Update', 'Foto Diperbaharui');
        return redirect(route('home'));
    }









    public function lihattransaksi()
    {
        if (Auth::guard('web')->check()) {
            $logged = 'web';
            $ids = Auth::user()->id;
            $panding = Transaksi::where([['status_transaksi', '=', '0'], ['user_id', '=', $ids]])->paginate(8);
            $sudah_bayar = Transaksi::where([['status_transaksi', '=', '1'], ['user_id', '=', $ids]])->paginate(5);
            $sudah_digunakan = Transaksi::where([['status_transaksi', '=', '2'], ['user_id', '=', $ids]])->paginate(5);

            $panding->withPath('panding');
            $sudah_bayar->withPath('sudah_bayar');
            $sudah_bayar->withPath('sudah_digunakan');
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('user.pages.keranjang', compact('panding', 'sudah_bayar', 'sudah_digunakan', 'logged'));
    }




    public function panding(Request $request)
    {
        $ids = Auth::user()->id;
        $panding = Transaksi::where([['status_transaksi', '=', '0'], ['user_id', '=', $ids]])->paginate(8);
        return view('user.templates.transaksi.panding', compact('panding'))->render();
    }

    public function sudah_bayar($id)
    {
        $ids = Auth::user()->id;
        $sudah_bayar = Transaksi::where([['status_transaksi', '=', '1'], ['user_id', '=', $ids]])->paginate(5);

        return view('user.templates.transaksi.sudah_bayar', compact('sudah_bayar'))->render();
    }

    public function sudah_digunakan($id)
    {
        $ids = Auth::user()->id;
        $sudah_digunakan = Transaksi::where([['status_transaksi', '=', '2'], ['user_id', '=', $ids]])->paginate(5);

        return view('user.templates.transaksi.sudah_digunakan', compact('sudah_digunakan'))->render();
    }
}
