@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Units</h6>
        </div>
        <div class="card-body">
            <form id="form" method="POST" action="{{route('units.store')}}">
                @csrf
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
                                <option value="{{$division->id_divisi}}">{{$division->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="nama_unit" type="text" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email_unit" type="email" class="form-control" id="inputName" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('units.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="button" class="btn btn-success" onclick="myAlert()">Save</button>
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
            swal("Add Units Success!", "You clicked the button!", "success").then(function(){
                // window.location.href="{{route('units.index')}}"
                document.getElementById('form').submit();
            });
        }
    </script>
@endpush