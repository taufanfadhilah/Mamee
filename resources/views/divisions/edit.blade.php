@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Division</h6>
        </div>
        <div class="card-body">
            <form id="my-form" action="{{route('divisions.update', $division->id_divisi)}}" method="POST">
                @csrf
                @method('PUT')
                <input name="id_perusahaan" type="hidden" value="{{Auth::user()->id_perusahaan}}">
                <div class="form-group row">
                    <label for="inputOrganization" class="col-sm-2 col-form-label">Organization Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Auth::user()->Organization->nama_perusahaan}}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input name="nama_divisi" type="text" class="form-control" id="inputName" placeholder="Name" value="{{$division->nama_divisi}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input name="email_divisi" type="email" class="form-control" id="inputName" placeholder="Email" value="{{$division->email_divisi}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="{{route('divisions.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    
@endsection
@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush