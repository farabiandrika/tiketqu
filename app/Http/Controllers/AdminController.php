<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Event;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Entity\Transaksi;

class AdminController extends Controller
{

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.pages.index');
    }

    public function konfirmasipembayaran() {
        $data = Transaksi::all();
        return view('admin.pages.konfirmasi-pembayaran', compact('data'));
    }

    public function indexManajemenEvent()
    {
        $data = Event::orderBy('id_event','DESC')->get();
        return view('admin.pages.event', compact('data'));
    }

    public function indexEventBerlalu()
    {
        $data = Event::onlyExpired()->get();
        return view('admin.pages.event-berlalu', compact('data'));
    }
}
