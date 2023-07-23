@extends('layout.head')

@section('main')
    <h1>halaman dashboard</h1>
    @if(auth()->user()->role === 'admin')
        <h1>Admin Dashboard</h1>
        <!-- Add admin-specific content here -->
    @else
        <h1>User Dashboard</h1>
        <!-- Add user-specific content here -->
    @endif
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection