@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Room</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <p>PT Finnet Indonesia</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <p>Solid</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCapacity" class="col-sm-2 col-form-label">Capacity</label>
                    <div class="col-sm-10">
                        <p>15</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="notes" rows="3">Ini ruang Solid</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('rooms.edit')}}" class="btn btn-warning">Edit</a>
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
                        window.location.href="{{route('rooms.index')}}"
                    });
                } else {
                    swal("Your data is safe!");
                }
            });
        }
    </script>
@endpush