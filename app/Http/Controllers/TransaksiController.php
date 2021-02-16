<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entity\Event;
use App\Entity\Transaksi;
use App\Entity\Pembeli;
use App\Entity\Tiketbeli;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TransaksiController extends Controller
{
    public function storetransaksi(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user = Auth::user();
            $event = Event::find($request->id_event);


            //transaksi
            $transaksi = new Transaksi;
            $transaksi->id_transaksi = $request->id_transaksi;
            $transaksi->event_id_event = $event->id_event;
            $transaksi->user_id = $user->id;
            $transaksi->save();


            //tiketbeli
            $nama_tiket     = $request->input('nama_tiket');
            $tiket_id_tiket = $request->input('id_tiket');
            $jumlah_beli    = $request->input('jumlah_tiket');
            $harga          = $request->input('harga_tiket');
            $count = count($nama_tiket);

            for ($i = 0; $i < $count; $i++) {
                if (isset($nama_tiket[$i])) {
                    $tiketbeli = new Tiketbeli;
                    $tiketbeli->tiket_id_tiket = $tiket_id_tiket[$i];
                    $tiketbeli->jumlah_beli = $jumlah_beli[$i];
                    $tiketbeli->user_id = $user->id;
                    $tiketbeli->harga = $harga[$i];
                    $tiketbeli->transaksi_id_transaksi = $request->id_transaksi;
                    $tiketbeli->save();
                }
            }
            $id = $request->id_transaksi;
            Alert::success('Isi data dengan lengkap', 'QR-Code melalui email');
            return redirect(route('proses.transaksi', $id));
        } else if (Auth::guard('admin')->check()) {
            Alert::error('Gabisa', 'Buat-Event Harus User Cok');
            return redirect('/admin');
        }
    }


    public function mbayar($id)
    {
        $data = Transaksi::where('id_transaksi', $id)->get();
        if (Auth::guard('web')->check()) {
            $logged = 'web';
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('user.pages.bayar', compact('logged','data'));
    }



    public function updatetransaksi(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user = Auth::user();

            //transaksi
            $transaksi= Transaksi::where('id_transaksi',$request->id_transaksi)->first();
            $transaksi->metode_pembayaran = $request->metode_pembayaran;
            $transaksi->jumlah_tiket = $request->jum;
            $transaksi->nover = $request->nover;
            $transaksi->total =  $request->total_jumlah;
            $transaksi->save();




            //pembeli
            $nama_pembeli           = $request->input('namap');
            $email_pembeli          = $request->input('email');
            $tiket_id_tiket         = $request->input('tiket_id');
            $tiketbeli_id_tiketbeli = $request->input('tiketbeli_id');
            $count                  = count($nama_pembeli);

            for ($i = 0; $i < $count; $i++) {
                if (isset($nama_pembeli[$i])) {
                    $pembeli = new Pembeli;
                    $pembeli->nama_pembeli = $nama_pembeli[$i];
                    $pembeli->email_pembeli = $email_pembeli[$i];
                    $pembeli->tiket_id_tiket = $tiket_id_tiket[$i];
                    $pembeli->tiketbeli_id_tiketbeli = $tiketbeli_id_tiketbeli[$i];
                    $pembeli->user_id = $user->id;
                    $pembeli->transaksi_id_transaksi = $request->id_transaksi;
                    $pembeli->save();
                }
            }


            Alert::success('Transaksi Anda Berhasil', 'Silahkan melakukan transfer');
            return redirect(route('keranjang'));
        } else if (Auth::guard('admin')->check()) {
            Alert::error('Gabisa', 'Buat-Event Harus User Cok');
            return redirect('/admin');
        }
    }

    public function changeStatusTransaksi(Request $request)
    {
        $transaksi = Transaksi::find($request->id_transaksi);
        $transaksi->status_transaksi = $request->status_transaksi;
        $transaksi->save();

        foreach ($transaksi->pembeli as $t) {
            QrCode::size(500)->format('svg')->generate($t->nama_pembeli . ' ' . $t->transaksi_id_transaksi, public_path('barcode/qr_' . $t->nama_pembeli . '_' . $t->transaksi_id_transaksi . '_' . $t->id_pembeli . '.svg'));
            $t->qrcode = 'qr_' . $t->nama_pembeli . '_' . $t->transaksi_id_transaksi . '_' . $t->id_pembeli . '.svg';
            $t->save();
        }

        return response()->json(['success' => 'Status change successfully.']);
    }


    public function delete($id)
    {
        $transaksi = Transaksi::where('id_transaksi',$id)->delete();
        $transaksi = Pembeli::where('transaksi_id_transaksi', $id)->delete();
        $transaksi = Tiketbeli::where('transaksi_id_transaksi', $id)->delete();
        return redirect()->back();
    }





}

