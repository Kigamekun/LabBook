<x-app-layout>


                <center><h1>Room</h1></center>
<br>
@foreach ($rm as $item)
    
<div class="card text-center">
    <div class="card-header">
        {{$item->name}}
    </div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item disabled" aria-disabled="true">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et quia. Quisquam eius recusandae libero dolor, odio aspernatur amet voluptatibus. Assumenda natus recusandae tempora ullam officiis excepturi, animi nesciunt eaque.</li>
            
    
        </ul>
        <br>
    
        <a href="{{ route('detail', ['id'=>$item->id]) }}" class="btn btn-primary">Booking di ruangan ini !</a>
    </div>
    
  </div>
  <br>
@endforeach


      
</x-app-layout>
