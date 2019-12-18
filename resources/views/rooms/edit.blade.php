@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Room</h6>
        </div>
        <div class="card-body">
            <form id="form" action="{{route('rooms.update', $room->id_room)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Auth::user()->Organization->nama_perusahaan}}" disabled>
                        <input type="hidden" name="id_perusahaan" value="{{Auth::user()->id_perusahaan}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="nama_ruangan" type="text" class="form-control" id="inputName" placeholder="Name" value="{{$room->nama_ruangan}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCapacity" class="col-sm-2 col-form-label">Capacity</label>
                    <div class="col-sm-10">
                        <input name="kapasitas" type="number" class="form-control" id="inputCapacity" placeholder="Capacity" value="{{$room->kapasitas}}" required min="1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="controlFile" class="col-sm-2 col-form-label">Photos</label>
                    <div class="col-sm-10">
                        <img src="{{$room->img_foto}}" alt="" class="img-thumbnail" width="100">
                        <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="controlFile" class="col-sm-2 col-form-label">Map</label>
                    <div class="col-sm-10">
                        <img src="{{$room->img_map}}" alt="" class="img-thumbnail" width="100">
                        <input name="map" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="notes" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input name="lokasi" type="text" class="form-control" value="{{$room->lokasi}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('rooms.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="button" class="btn btn-warning" onclick="myAlert()">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    
@endsection
@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function myAlert(){
            swal("Edit Room Success!", "You clicked the button!", "success").then(function(){
                document.getElementById('form').submit()
            });
        }
    </script>
@endpush