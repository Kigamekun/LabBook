
            <x-app-layout>

                <br>
                <br>
                <br>
                <br>
            
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            
                        <div class="container-fluid mt--7">
                            <!-- Table -->
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-header border-0">
                                            <h3 class="mb-0">Card tables</h3>
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
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
            
                                                    @for ($i = 1; $i <= $dm1; $i++)
            
            
                                                        <tr>
                                                            <td>{{ $i.'-'.$m.'-'.$y }}</td>
                                                            <td>{{ App\Models\Booking::where('tanggal',date_create($i.'-'.$m.'-'.$y ))->get()->count() }}/{{$rm->limit}}</td>
                                                            <td><span class="badge badge-success">Success</span></td>
                                                            <td></td>
                                                            <td><button type="button" class="btn btn-info">Booking </button></td>
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
            
            
            
                            
            
            
                    </div>
                </div>
            </x-app-layout>
            