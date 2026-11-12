@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <section class="card">
        <div class="page-heading">
            <div>
                <h1>User Accounts</h1>
                <p>Total users: {{ $users->count() }}</p>
            </div>

            <a href="{{ route('users.create') }}" class="button">
                + Add User
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
                    <th>Avatar</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>
                            <img
                                src="{{ $user->avatar
                                    ? asset('storage/' . $user->avatar)
                                    : asset('images/avatar-placeholder.svg') }}"
                                alt="{{ $user->full_name }}"
                                width="60"
                                height="60"
                                style="border-radius: 50%; object-fit: cover;"
                            >
                        </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>
                            <a
                                href="{{ route('users.edit', $user) }}"
                                class="button small"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection