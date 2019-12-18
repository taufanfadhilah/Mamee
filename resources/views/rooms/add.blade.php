@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Rooms</h6>
        </div>
        <div class="card-body">
            <form>
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
                    <label for="inputCapacity" class="col-sm-2 col-form-label">Capacity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputCapacity" placeholder="Capacity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="controlFile" class="col-sm-2 col-form-label">Photos</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="notes" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('rooms.index')}}" class="btn btn-secondary">Cancel</a>
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
            swal("Add Rooms Success!", "You clicked the button!", "success").then(function(){
                window.location.href="{{route('rooms.index')}}"
            });
        }
    </script>
@endpush