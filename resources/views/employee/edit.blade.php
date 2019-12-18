@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Employee</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputNIK" class="col-sm-2 col-form-label">NIK/ID</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNIK" placeholder="NIK/ID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <select class="custom-select">
                            <option value="1">PT Finnet</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDivision" class="col-sm-2 col-form-label">Division</label>
                    <div class="col-sm-10">
                        <select class="custom-select">
                            <option value="1">IT Planning & Assurance</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                        <select class="custom-select">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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
            swal("Edit Employee Success!", "You clicked the button!", "success").then(function(){
                window.location.href="{{route('employee.index')}}"
            });
        }
    </script>
@endpush