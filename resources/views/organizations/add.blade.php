@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Organization</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputAccount" class="col-sm-2 col-form-label">Account Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAccount" placeholder="Account Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="selectStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="custom-select">
                            <option value="1">Active</option>
                            <option value="2">Not-Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('organizations.index')}}" class="btn btn-secondary">Cancel</a>
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
            swal("Add Organizations Success!", "You clicked the button!", "success").then(function(){
                window.location.href="{{route('organizations.index')}}"
            });
        }
    </script>
@endpush