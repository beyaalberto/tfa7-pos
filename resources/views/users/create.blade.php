@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <section class="card">
        <h1>Create User</h1>

        @include('users.form')
    </section>
@endsection