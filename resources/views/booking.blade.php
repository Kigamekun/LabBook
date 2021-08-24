<x-app-layout>

    <br>
    <br>
    <br>
    <br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           
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


        </div>
    </div>
</x-app-layout>
