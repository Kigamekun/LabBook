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

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Tanggal</span>
                    </div>
                    <input type="text" name="tanggal" class="form-control" value="{{$tgl}}">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Room</span>
                    </div>
                    <input type="text" name="id"  class="form-control" value="{{$rm}}">
                </div>
            </div>
<center>
            <button class="w-80 btn btn-outline-success" type="submit">Booking</button>
        </center>
            </form>
           
        @else
            <center><h1>Sorry for you the booking has not available</h1></center>
        @endif       

             


</x-app-layout>
