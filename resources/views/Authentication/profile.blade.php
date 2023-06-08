@extends('layout.layout')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">User Profile</div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <th>Name</th>
                <td>{{ Auth::user()->name }}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{ Auth::user()->email }}</td>
              </tr>
              <tr>
                <th>Role</th>
                <td>{{ Auth::user()->role }}</td>
              </tr>
            </tbody>
          </table>
          <a href="{{ url('/siswas') }}" class="btn btn-primary">Kembali ke Data Siswa</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
