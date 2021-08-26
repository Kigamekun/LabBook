<x-app-layout>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url()->previous()}}">Room</a></li>
          <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
      </nav>
    <br>
    <br>
    <br>
    <br>
  
    @if(Auth::user()->token == 0)

    <center><h1>Your token is 0</h1></center>
        @elseif (is_null(App\Models\Booking::where(['user_id'=>Auth::id(),'tanggal'=>date_create($tgl),'room_id'=>$rm])->first()))
        <form method="POST" action="{{ route('bookingPost') }}">
            @csrf

            <input type="hidden" name="tanggal" class="form-control" value="{{$tgl}}">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Tanggal</span>
                    </div>
                    <input type="text" class="form-control" value="  {{$tgl}}" disabled>
                </div>
            </div>
            <input type="hidden" name="id"  class="form-control" value="{{$rm}}">
<center>
            <button style="width: 100%" class=" btn btn-outline-success" type="submit">Booking</button>
        </center>
            </form>
           
        @else
            <center><h1>You already booked on this date, so you can't book again</h1></center>
        @endif       

             


</x-app-layout>
