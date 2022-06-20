@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3 bg-dark">
        <div class="card-body">
            <h1 class="fw-bolder">Tambah Pegawai</h1>
            <form method="POST" action="{{route('insertdata')}}">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama lengkap</label>
                    <input type="text" name="nama"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="multiple select example">
                        <option selected></option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                    <input type="text" name="notelp"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('notelp')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection