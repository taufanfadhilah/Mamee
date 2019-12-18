@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Division</h6>
        </div>
        <div class="card-body">
            <div class="form-group row">
                    <label for="inputNIK" class="col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <p>: {{$division->id_divisi}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2">Organization Name</label>
                    <div class="col-sm-10">
                        <p>: {{$division->Organization->nama_perusahaan}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <p>: {{$division->nama_divisi}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDivision" class="col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <p>: {{$division->email_divisi}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('divisions.edit', $division->id_divisi)}}" class="btn btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" onclick="myAlert()">Delete</button>
                        <form id="form-delete" method="POST" action="{{route('divisions.update', $division->id_divisi)}}">
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