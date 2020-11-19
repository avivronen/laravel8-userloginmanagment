@extends('templates.main')

@section('content')
    <h1>Register</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email') }}"  class="form-control @error('email') is-invalid @enderror" >
            @error('email')
            <span class="alert-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  class="form-control @error('password') is-invalid @enderror" >
            @error('password')
            <span class="alert-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection
