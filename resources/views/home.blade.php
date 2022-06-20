@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
      <div class="card-body">
        <a href="{{route('tambahpegawai')}}" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table bg-dark mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($data as $row)
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$row->nama}}</td>
                <td>{{$row->jeniskelamin}}</td>
                <td>+62 {{$row->notelp}}</td>
                <td class="d-flex">
                  <form action="/deletedata/{{$row->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger me-2">Delete</button>
                  </form>
                  <a href="{{route('tampilan',$row->id)}}" type="button" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
      </div>
    </div>
</div>
@endsection