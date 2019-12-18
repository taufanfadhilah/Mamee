@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Unit</h6>
        </div>
        <div class="card-body">
            <form id="form" method="POST" action="{{route('units.update', $unit->id_unit)}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Auth::user()->Organization->nama_perusahaan}}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Division Name</label>
                    <div class="col-sm-10">
                        <select name="id_divisi" class="custom-select">
                            @foreach ($divisions as $division)
                                @if ($division->id_divisi == $unit->id_divisi)
                                    <option value="{{$division->id_divisi}}" selected>{{$division->nama_divisi}}</option>
                                @else
                                    <option value="{{$division->id_divisi}}">{{$division->nama_divisi}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="nama_unit" type="text" class="form-control" id="inputName" placeholder="Name" value="{{$unit->nama_unit}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email_unit" type="email" class="form-control" id="inputName" placeholder="Email" value="{{$unit->email_unit}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('units.index')}}" class="btn btn-secondary">Cancel</a>
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
            swal("Edit Unit Success!", "You clicked the button!", "success").then(function(){
                // window.location.href="{{route('units.index')}}"
                document.getElementById('form').submit();
            });
        }
    </script>
@endpush