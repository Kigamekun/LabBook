<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
class check_bookings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $newDate = date("Y-m-d", strtotime($request->tanggal));
        if (is_null(Booking::where(['user_id'=>Auth::id(),'tanggal'=>$newDate,'room_id'=>$request->id])->first())) {
            # code...
            return $next($request);
        }
        else {
            return redirect()->back()->with(['status'=>'eitsss kamu uda ngisi , gabole curang yaa']);
        }

    }
}
