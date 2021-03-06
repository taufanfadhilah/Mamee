@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Employee</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputNIK" class="col-sm-2 col-form-label">NIK/ID</label>
                    <div class="col-sm-10">
                        <p>: 965025</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <p>: PT Finnet Indonesia</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <p>: Yuyun DA</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDivision" class="col-sm-2 col-form-label">Division</label>
                    <div class="col-sm-10">
                        <p>: IT Planning & Assurance</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <p>: 5</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('employee.edit')}}" class="btn btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" onclick="myAlert()">Delete</button>
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
                        window.location.href="{{route('employee.index')}}"
                    });
                } else {
                    swal("Your data is safe!");
                }
            });
        }
    </script>
@endpush