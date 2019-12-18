@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Room</h6>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputOrganization" class="col-sm-2">Organization Name</label>
                <div class="col-sm-10">
                    <p>: {{Auth::user()->Organization->nama_perusahaan}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2">Name</label>
                <div class="col-sm-10">
                    <p>: {{$room->nama_ruangan}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCapacity" class="col-sm-2">Capacity</label>
                <div class="col-sm-10">
                    <p>: {{$room->kapasitas}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCapacity" class="col-sm-2">Location</label>
                <div class="col-sm-10">
                    <p>: {{$room->lokasi}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCapacity" class="col-sm-2">Photo</label>
                <div class="col-sm-10">
                    <img src="{{$room->img_foto}}" alt="" class="img-thumbnail" width="200" height="150">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCapacity" class="col-sm-2">Map</label>
                <div class="col-sm-10">
                    <img src="{{$room->img_map}}" alt="" class="img-thumbnail" width="200" height="150">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <a href="{{route('rooms.edit', $room->id_room)}}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="myAlert()">Delete</button>
                    <form id="form-delete" method="POST" action="{{route('rooms.destroy', $room->id_room)}}">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function myAlert(){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your data has been deleted!", {
                    icon: "success",
                    }).then(function(){
                        window.document.getElementById("form-delete").submit();
                    });
                } else {
                    swal("Your data is safe!");
                }
            });
        }
    </script>
@endpush