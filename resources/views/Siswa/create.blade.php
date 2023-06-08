@extends('layout.layout')

@section('content')
<div class="mt-5 mx-auto" style="width: 380px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/siswas') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Siswa</label>
                    <textarea class="form-control" id="nama_siswa" rows="3" name="nama_siswa">{{ old('nama_siswa') }}</textarea>
                    @error('siswa')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="10 RPL">10 RPL</option>
                        <option value="10 DMM">10 DMM</option>
                        <option value="10 TKJ">10 TKJ</option>
                        <option value="10 A">10 A</option>
                        <option value="10 B">10 B</option>
                        <option value="10 C">10 C</option>
                    </select>
                    @error('kelas')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <select name="keterangan" id="keterangan" class="form-control">
                        <option value="Sakit">Sakit</option>
                        <option value="Alpha">Alpha</option>
                        <option value="Izin">Izin</option>
                        <option value="Hadir">Hadir</option>
                    </select>
                    @error('keterangan')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
