<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;

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
        $date_now[1] == 12 ? $dm2 = cal_days_in_month(CAL_GREGORIAN,1,$date_now[0]+1) : $dm2 = cal_days_in_month(CAL_GREGORIAN,$date_now[1]+1,$date_now[0]);
            
        
        
        return view('room',['dm1'=>$dm1,'dm2'=>$dm2,'m'=>$date_now[1],'y'=>$date_now[0],'rm'=>$rm]);
    }
}
