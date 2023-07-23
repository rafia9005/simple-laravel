@extends('layout.head')

@section('main')
<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <span>{{ $message }}</span>
    @enderror

    <label for="password">Password</label>
    <input type="password" name="password" required>
    @error('password')
        <span>{{ $message }}</span>
    @enderror

    <button type="submit">Login</button>
</form>
@endsection