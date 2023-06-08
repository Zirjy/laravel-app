@extends('layout.layout')
@section('content')

<div class="d-flex flex-column justify-content-center align-items-center p-5 border-bottom">
    <h3 class="text-center mb-4">Tambahkan Absensi</h3>
    <a href="{{ url('/siswas/create') }}" class="btn btn-primary">Tambah Absensi</a>
  </div>
  
<div class="row row-cols-2 row-cols-md-2 g-4 m-5 ">
    @foreach ($data1 as $item)
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Siswa: {{ $item->nama_siswa }}</h5>
                <p class="card-text">Tanggal: {{ $data2->format('D-m-Y') }}</p>
                <p class="card-text">Kelas: {{ $item->kelas }}</p>
                <p class="card-text">Keterangan: {{ $item->keterangan }}</p>
                <div class="group-action">
                    <form action="{{ url("/siswas/$item->id") }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <a href="{{ url("/siswas/$item->id/edit") }}" class="badge bg-info text-white">edit</a>
                        <button type="submit" class="badge bg-danger text-white">delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<br>
{{ $data1->links('pagination::bootstrap-4') }}
</div>
@endsection