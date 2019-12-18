@extends('layouts.app')
@push('css')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
    {{-- <h4>Management  Employee</h4> --}}

    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Management Room</h6>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-3">
                    <a href="{{route('rooms.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Organization Name</th>
                            <th>Name</th>
                            <th>Capacity</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{$room->Organization->nama_perusahaan}}</td>
                                    <td>{{$room->nama_ruangan}}</td>
                                    <td>{{$room->kapasitas}}</td>
                                    <td>
                                    <a href="{{route('rooms.show', $room->id_room)}}" class="btn btn-info">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

@push('js')
    <!-- Page level plugins -->
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
@endpush