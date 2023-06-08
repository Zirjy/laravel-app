@extends('Layout.layout')
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
        <div class="card-header">
            Form Login
        </div>
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                 @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                
                <a href="{{ route('password.request') }}" class="btn btn-link">Forget Password</a>
                <button type="submit" class="btn btn-primary">Submit</button>           
             </form>
        </div>
    </div>
</div>
@endsection
