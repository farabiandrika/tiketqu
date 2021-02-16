<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entity\Event;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function homepage()
    {
        $free = Event::where([['status_event', '=' ,'1'], ['jenis_promosi', '=', '0']])->paginate(8);
        $premium = Event::where([['status_event', '=', '1'], ['jenis_promosi', '=', '1']])->paginate(5);

        $free->withPath('free');
        $premium->withPath('premium');

        if (Auth::guard('web')->check()) {
            $logged = 'web';
        } else if (Auth::guard('admin')->check()) {
            $logged = 'admin';
        } else {
            $logged = '0';
        }

        return view('index', compact('free', 'premium', 'logged'));
    }

    public function free(Request $request) {
        $free = Event::where([['status_event', '=', '1'], ['jenis_promosi', '=', '0']])->paginate(8);
        if ($request->ajax()) {
            return view('user.templates.event.free', compact('free'))->render();
        }
    }

    public function premium(Request $request)
    {
        $premium = Event::where([['status_event', '=', '1'], ['jenis_promosi', '=', '1']])->paginate(5);
        if ($request->ajax()) {
            return view('user.templates.event.premium', compact('premium'))->render();
        }
    }

    public function detail($id) {
        $id_decrypt = decrypt($id);
        $data = Event::where([['id_event', '=' , $id_decrypt],['status_event', '=' , '1']])->get();
        if (count($data) != 0) {
            if (Auth::guard('web')->check()) {
                $logged = 'web';
            } else if (Auth::guard('admin')->check()) {
                $logged = 'admin';
            } else {
                $logged = '0';
            }
            return view('user.pages.detail_event1', compact('logged', 'data'));
        }
        return redirect('/');
    }

}
