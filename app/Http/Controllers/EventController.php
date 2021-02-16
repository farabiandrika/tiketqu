<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Event;
use App\Entity\Penyelenggara;
use App\Entity\Tiket;
use App\Entity\Tes1;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class EventController extends Controller
{
    public function indexBuatEvent(){
        if(Auth::guard('web')->check() || Auth::guard('admin')->check()){
            if (Auth::guard('web')->check()) {
                $logged = 'web';
            } else if (Auth::guard('admin')->check()) {
                $logged = 'admin';
            } else {
                $logged = '0';
            }
            return view('user.pages.buat_event', compact('logged'));
        }
        else {
            return redirect ('/login');
        }
    }

     public function storeBackup(Request $request) {
        // Validate the request...
        $tes1 = new Tes1;
        $tes1->nama_tes1 = $request->nama_tes1;
        $tes1->save();

        echo '<pre>', print_r($tes1, 1), '</pre>';
    }

    public function store(Request $request) {
        if (Auth::guard('web')->check()) {
            $user = Auth::user();
            //Validate the request...

            //Penyelenggara
            $penyelenggara = new Penyelenggara;

            if ($request->hasFile('logo_penyelenggara')) {
                $file_logo_penyelenggara = $request->file('logo_penyelenggara');
                $filename_logo_penyelenggara = time() . "_" . $request->nama_penyelenggara . '.' . $file_logo_penyelenggara->getClientOriginalExtension();
                $file_logo_penyelenggara->storeAs('public/penyelenggara', $filename_logo_penyelenggara);
                $penyelenggara->logo_penyelenggara = $filename_logo_penyelenggara;
            }

            $penyelenggara->nama_penyelenggara = $request->nama_penyelenggara;
            $penyelenggara->no_telp_penyelenggara = $request->no_telp_penyelenggara;
            $penyelenggara->no_rek_penyelenggara = $request->no_rek_penyelenggara;
            $penyelenggara->nama_bank_penyelenggara = $request->nama_bank_penyelenggara;
            $penyelenggara->user_id = $user->id;
            $penyelenggara->save();

            //Event
            $event = new Event;

            if ($request->hasFile('banner_event')) {
                $file_banner_event = $request->file('banner_event');
                $filename_banner_event = time() . "_" . $request->nama_event . '.' . $file_banner_event->getClientOriginalExtension();
                $file_banner_event->storeAs('public/event', $filename_banner_event);
                $event->banner_event = $filename_banner_event;
            }

            $event->nama_event = $request->nama_event;
            $event->deskripsi_event = $request->deskripsi_event;
            $event->waktu_mulai_event = $request->waktu_mulai_event;
            $event->waktu_berakhir_event = $request->waktu_berakhir_event;
            $event->lokasi_event = $request->lokasi_event;
            $event->lokasi_latitude = $request->lokasi_latitude;
            $event->lokasi_longitude = $request->lokasi_longitude;
            $event->kategori_event = $request->kategori_event;
            $event->jenis_promosi = $request->jenis_promosi;
            $event->penyelenggara_id_penyelenggara = $penyelenggara->id_penyelenggara;
            $event->user_id = $user->id;
            $event->ends_at = $request->waktu_berakhir_event;
            $event->save();

            //Tiket
            $nama_tiket = $request->input('nama_tiket');
            $deskripsi_tiket = $request->input('deskripsi_tiket');
            $harga_tiket = $request->input('harga_tiket');
            $stok_tiket = $request->input('stok_tiket');
            $satuan_tiket = $request->input('satuan_tiket');
            $count = count($nama_tiket);

            for ($i = 0; $i < $count; $i++) {
                if (isset($nama_tiket[$i])) {  //for check value is set or not..
                    $tiket = new Tiket;
                    $tiket->nama_tiket = $nama_tiket[$i]; //different number
                    $tiket->deskripsi_tiket = $deskripsi_tiket[$i];
                    $tiket->harga_tiket = $harga_tiket[$i];
                    $tiket->stok_tiket = $stok_tiket[$i];
                    $tiket->satuan_tiket = $satuan_tiket[$i];
                    $tiket->event_id_event = $event->id_event;
                    $tiket->save();
                }
            }

            Alert::success('Berhasil Membuat Event', 'Harap tunggu hingga admin mengkonfirmasi');
            return redirect('/eventku');
        }
        else if (Auth::guard('admin')->check()) {
            Alert::error('Gabisa', 'Buat-Event Harus User Cok');
            return redirect('/admin');
        }
    }

    public function changeStatusEvent(Request $request)
    {
        $event = Event::find($request->id_event);
        $event->status_event = $request->status_event;
        $event->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function getEventById(Request $request)
    {
        if($request->ajax()) {
            $event=Event::withExpired()->find($request->id);
            return response($event);
        }
    }

    public function updateEvent(Request $request)
    {
        $event = Event::where('id_event',$request->id_event)->first();
        $event->nama_event = $request->nama_event;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->waktu_mulai_event = $request->waktu_mulai_event;
        $event->waktu_berakhir_event = $request->waktu_berakhir_event;
        $event->lokasi_event = $request->lokasi_event;
        $event->lokasi_latitude = $request->lokasi_latitude;
        $event->lokasi_longitude = $request->lokasi_longitude;
        $event->kategori_event = $request->kategori_event;
        $event->jenis_promosi = $request->jenis_promosi;
        $event->ends_at = $request->waktu_berakhir_event;
        $event->save();

        //Tiket
        $nama_tiket = $request->input('nama_tiket');
        $deskripsi_tiket = $request->input('deskripsi_tiket');
        $harga_tiket = $request->input('harga_tiket');
        $stok_tiket = $request->input('stok_tiket');
        $satuan_tiket = $request->input('satuan_tiket');
        $count = count($nama_tiket);

        $tiket = Tiket::where('event_id_event', $request->id_event)->get();
        $i=0;
        foreach( $tiket as $t) {
            $t->nama_tiket = $nama_tiket[$i]; //different number
            $t->deskripsi_tiket = $deskripsi_tiket[$i];
            $t->harga_tiket = $harga_tiket[$i];
            $t->stok_tiket = $stok_tiket[$i];
            $t->satuan_tiket = $satuan_tiket[$i];
            $t->event_id_event = $event->id_event;
            $t->save();
            $i++;
        }

        //Tiket Baru
        $nama_tiket_baru = $request->input('nama_tiket_baru');
        if ($nama_tiket_baru != null) {
            $deskripsi_tiket_baru = $request->input('deskripsi_tiket_baru');
            $harga_tiket_baru = $request->input('harga_tiket_baru');
            $stok_tiket_baru = $request->input('stok_tiket_baru');
            $satuan_tiket_baru = $request->input('satuan_tiket_baru');
            $count = count($nama_tiket_baru);

            for ($i = 0; $i < $count; $i++) {
                if (isset($nama_tiket_baru[$i])) {  //for check value is set or not..
                    $tiket = new Tiket;
                    $tiket->nama_tiket = $nama_tiket_baru[$i]; //different number
                    $tiket->deskripsi_tiket = $deskripsi_tiket_baru[$i];
                    $tiket->harga_tiket = $harga_tiket_baru[$i];
                    $tiket->stok_tiket = $stok_tiket_baru[$i];
                    $tiket->satuan_tiket = $satuan_tiket_baru[$i];
                    $tiket->event_id_event = $event->id_event;
                    $tiket->save();
                }
            }
        }

        Alert::success('Berhasil', 'Data event berhasil di ubah!');
        return redirect()->back();
    }

    public function deleteTiket(Request $request) {
        if($request->ajax()) {
            Tiket::destroy($request->id);
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }
    }

    public function telahBuatEvent()
    {
        if (Auth::guard('web')->check()) {
            $logged = 'web';
            $ids = Auth::user()->id;
            $free = Event::where([['jenis_promosi', '=', '0'], ['user_id', '=', $ids]])->paginate(8);
            $premium = Event::where([['jenis_promosi', '=', '1'], ['user_id', '=', $ids]])->paginate(5);

            $free->withPath('tfree');
            $premium->withPath('tpremium');
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('user.pages.telah_buat_event', compact('free', 'premium', 'logged'));
    }

    public function tfree(Request $request)
    {
        $ids = Auth::user()->id;
        $free = Event::where([['status_event', '=', '1'], ['jenis_promosi', '=', '0'], ['user_id', '=', $ids]])->paginate(8);
        return view('user.templates.telahevent.edit_free', compact('free'))->render();
    }

    public function tpremium($id)
    {
        $ids = Auth::user()->id;
        $premium = Event::where([['status_event', '=', '1'], ['jenis_promosi', '=', '1'], ['user_id', '=', $ids]])->paginate(5);

        return view('user.templates.telahevent.edit_premium', compact('premium'))->render();
    }
    public function edit($id)
    {
        $data = Event::where('id_event', $id)->get();
        if (Auth::guard('web')->check()) {
            $logged = 'web';
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }
        return view('user.pages.edit_event', compact('logged', 'data'));
    }
}
