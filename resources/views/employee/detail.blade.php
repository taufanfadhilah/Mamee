@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Employee</h6>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputNIK" class="col-sm-2">NIK/ID</label>
                <div class="col-sm-10">
                    <p>: {{$employee->nik}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputOrganization" class="col-sm-2">Organization Name</label>
                <div class="col-sm-10">
                    <p>: PT Finnet Indonesia</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2">Name</label>
                <div class="col-sm-10">
                    <p>: {{$employee->nama}}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDivision" class="col-sm-2">Division</label>
                <div class="col-sm-10">
                    <p>: IT Planning & Assurance</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLevel" class="col-sm-2">Level</label>
                <div class="col-sm-10">
                    <p>: {{$employee->level_jabatan}}</p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <a href="{{route('employee.edit', $employee->nik)}}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="myAlert()">Delete</button>
                    <form id="form-delete" method="POST" action="{{route('employee.destroy', $employee->nik)}}">
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