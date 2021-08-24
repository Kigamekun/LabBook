<x-app-layout>

    <br>
    <br>
    <br>
    <br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <center><h1>Room</h1></center>
<br>
@foreach ($rm as $item)
    
<div class="card text-center">
    <div class="card-header">
        {{$item->name}}
    </div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item disabled" aria-disabled="true">-</li>
            
    
        </ul>
        <br>
    
        <a href="{{ route('detail', ['id'=>$item->id]) }}" class="btn btn-primary">Go somewhere</a>
    </div>
    
  </div>
  <br>
@endforeach


        </div>
    </div>
</x-app-layout>
