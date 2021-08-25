<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
class bookingController extends Controller
{
    public function index()
    {
        $rm = Room::all();
        return view('dashboard',['rm'=>$rm]);
    }

    public function detail(Request $request , $id)
    {
        // dd('ada');
        $rm = Room::where('id',$id)->first();
        $date_now = explode(' ',Carbon::now()->format('Y m d'));
        $dm1 = cal_days_in_month(CAL_GREGORIAN,$date_now[1],$date_now[0]);
        // $date_now[1] == 12 ? $dm2 = cal_days_in_month(CAL_GREGORIAN,1,$date_now[0]+1) : $dm2 = cal_days_in_month(CAL_GREGORIAN,$date_now[1]+1,$date_now[0]);
        if ($date_now[1] == 12) {
            $bln = 1;
            $thn = $date_now[0]+1;
        } else {
            $bln = $date_now[1]+1;
            $thn = $date_now[0];
        }
            
        return view('room',['dm1'=>$dm1,'bln'=>$bln,'thn'=>$thn,'d'=>$date_now[2],'m'=>$date_now[1],'y'=>$date_now[0],'rm'=>$rm]);
    }
    public function seeBook($id,$tgl)
    {
        $bookers = Booking::where(['room_id'=>$id,'tanggal'=>date_create($tgl)])->get();
        // dd($bookers);
        return view('bookers',['bk'=>$bookers]);
    }

    public function booking($id,$tgl)
    {
        return view('booking',['rm'=>$id,'tgl'=>$tgl]);
    }

    public function bookingPost(Request $request)
    {
        // dd($request->id);
        booking::create([
            'user_id'=>Auth::id(),
            'tanggal'=>date_create($request->tanggal),
            'room_id'=>$request->id
        ]);

        return redirect()->back()->with(['status'=>'You has been booked !']);

    }
}
