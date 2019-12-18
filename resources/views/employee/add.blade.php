@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Employee</h6>
        </div>
        <div class="card-body">
            <form id="form" action="{{route('employee.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="inputNIK" class="col-sm-2 col-form-label">NIK/ID</label>
                    <div class="col-sm-10">
                    <input name="nik" type="number" class="form-control" id="inputNIK" placeholder="NIK/ID" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Auth::user()->Organization->nama_perusahaan}}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="col-sm-10">
                        <select name="id_unit" id="" class="form-control">
                            @foreach (Auth::user()->Organization->Divisions as $division)
                                @foreach ($division->Units as $unit)
                                    <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputName" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input name="phone" type="text" class="form-control" id="inputName" placeholder="Phone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <select name="level_jabatan" class="custom-select">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('employee.index')}}" class="btn btn-secondary">Cancel</a>
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
            swal("Add Employee Success!", "You clicked the button!", "success").then(function(){
                document.getElementById('form').submit()
            });
        }
    </script>
@endpush