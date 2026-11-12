@extends('layouts.app')

@section('title', 'Home | My POS')

@section('content')
    <h2>Welcome to My POS</h2>

    <p>
        A simple point-of-sale application foundation
        for viewing customer and user accounts.
    </p>

    <p>
        Account records are stored in a database
        and retrieved using Laravel Eloquent.
    </p>

    <a class="button" href="{{ route('customers.index') }}">
        View Customers
    </a>

    <a class="button" href="{{ route('users.index') }}">
        View Users
    </a>
@endsection