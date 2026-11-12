@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <section class="card">
        <h1>Edit User</h1>

        @include('users.form')
    </section>
@endsection