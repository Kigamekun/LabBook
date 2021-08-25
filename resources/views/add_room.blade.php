<x-app-layout>

    <br>
    <br>
    <br>
    <br>
  
        <form method="POST" action="{{ route('roomPost') }}">
            @csrf

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Limit</span>
                    </div>
                    <input type="text" name="limit"  class="form-control" >
                </div>
            </div>
<center>
            <button class="w-80 btn btn-outline-success" type="submit">Send</button>
        </center>
            </form>
            

             


</x-app-layout>
