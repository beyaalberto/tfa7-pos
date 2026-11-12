@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <section class="card">
        <h1>Create Customer</h1>

        @include('customers.form')
    </section>
@endsection