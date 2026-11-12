@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <section class="card">
        <div class="page-heading">
            <div>
                <h1>Customer Accounts</h1>
                <p>Total customers: {{ $customers->count() }}</p>
            </div>

            <a href="{{ route('customers.create') }}" class="button">
                + Add Customer
            </a>
        </div>

        @if (session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a
                                href="{{ route('customers.edit', $customer) }}"
                                class="button small"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No customers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection