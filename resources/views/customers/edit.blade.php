@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <section class="card">
        <h1>Edit Customer</h1>

        @include('customers.form')
    </section>
@endsection