@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Employee</h6>
        </div>
        <div class="card-body">
            <form id="form" action="{{route('employee.update', $employee->nik)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="inputNIK" class="col-sm-2 col-form-label">NIK/ID</label>
                    <div class="col-sm-10">
                    <input name="nik" type="number" class="form-control" id="inputNIK" placeholder="NIK/ID" value="{{$employee->nik}}" required>
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
                                    @if ($unit->id_unit == $employee->id_unit)
                                        <option value="{{$unit->id_unit}}" selected>{{$unit->nama_unit}}</option>
                                    @else
                                        <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputName" placeholder="Name" value="{{$employee->nama}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputName" placeholder="Email" value="{{$employee->email}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input name="phone" type="text" class="form-control" id="inputName" placeholder="Phone" value="{{$employee->phone}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <select name="level_jabatan" class="custom-select">
                            @if ($employee->level_jabatan == 'I')
                                <option value="I" selected>I</option>
                            @else
                                <option value="I">I</option>
                            @endif
                            @if ($employee->level_jabatan == 'II')
                                <option value="II" selected>II</option>
                            @else
                                <option value="II">II</option>
                            @endif
                            @if ($employee->level_jabatan == 'III')
                                <option value="III" selected>III</option>
                            @else
                                <option value="III">III</option>
                            @endif
                            @if ($employee->level_jabatan == 'IV')
                                <option value="IV" selected>IV</option>
                            @else
                                <option value="IV">IV</option>
                            @endif
                            @if ($employee->level_jabatan == 'V')
                                <option value="V" selected>V</option>
                            @else
                                <option value="V">V</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('employee.index')}}" class="btn btn-secondary">Cancel</a>
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
            swal("Edit Employee Success!", "You clicked the button!", "success").then(function(){
                document.getElementById('form').submit()
            });
        }
    </script>
@endpush