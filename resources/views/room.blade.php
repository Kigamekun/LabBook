<x-app-layout>

    <style>
        tr {
            transition: .5s;
        }

        tr:hover {
            opacity: .5;
        }

    </style>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          
          <li class="breadcrumb-item active" aria-current="page">Room</li>
        </ol>
      </nav>
    <br>
    <br>
    <br>
    <br>



    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Jadwal </h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">tanggal</th>
                                    <th scope="col">Booked</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col">Booking !</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @for ($i = 1; $i <= $dm1; $i++)

                                    @if ($i >= $d)
                                        <tr>
                                            <td>{{ $i . '-' . $m . '-' . $y }}</td>
                                            <td>{{ $v = App\Models\Booking::where(['room_id' => $rm->id, 'tanggal' => date_create($i . '-' . $m . '-' . $y)])->get()->count() }}/{{ $rm->limit }}
                                            </td>
                                            <td>
                                                @if ($v == $rm->limit)
                                                    <span class="badge badge-danger">Full</span>
                                            </td>

                                        @else
                                            <span class="badge badge-success">Available</span></td>

                                    @endif
                                    <td></td>

                                    @if ($v == $rm->limit)
                                        <td><button type="button" class="btn btn-warning" disabled>Full </button>
                                        </td>
                                    @else
                                        <td><a href="{{ route('booking', ['id' => $rm->id, 'tgl' => Illuminate\Support\Facades\Crypt::encrypt($i . '-' . $m . '-' . $y)]) }}"
                                                class="btn btn-info">Booking </a></td>

                                    @endif
                                    <td><a href="{{ route('seeBook', ['id' => $rm->id, 'tgl' => Illuminate\Support\Facades\Crypt::encrypt($i . '-' . $m . '-' . $y)]) }} "
                                            class="btn btn-primary">See bookers </a></td>

                                    </tr>




                                @endif

                                @endfor
                                @for ($i = 1; $i < 10; $i++)
                               
                                <tr>
                                    <td>{{ $i . '-' . $bln . '-' . $thn }}</td>
                                    <td>{{ $v = App\Models\Booking::where(['room_id' => $rm->id, 'tanggal' => date_create($i . '-' . $bln . '-' . $thn)])->get()->count() }}/{{ $rm->limit }}
                                    </td>
                                    <td>
                                        @if ($v == $rm->limit)
                                            <span class="badge badge-danger">Full</span>
                                    </td>

                                @else
                                    <span class="badge badge-success">Available</span></td>

                            @endif
                            <td></td>

                            @if ($v == $rm->limit)
                                <td><button type="button" class="btn btn-warning" disabled>Full </button>
                                </td>
                            @else
                                <td><a href="{{ route('booking', ['id' => $rm->id, 'tgl' => Illuminate\Support\Facades\Crypt::encrypt($i . '-' . $bln . '-' . $thn)]) }}"
                                        class="btn btn-info">Booking </a></td>

                            @endif
                            <td><a href="{{ route('seeBook', ['id' => $rm->id, 'tgl' => Illuminate\Support\Facades\Crypt::encrypt($i . '-' . $bln . '-' . $thn)]) }} "
                                    class="btn btn-primary">See bookers </a></td>

                            </tr>




                                @endfor


                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table -->

    </div>






</x-app-layout>
