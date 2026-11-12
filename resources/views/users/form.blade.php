@php
    $editing = isset($user);
@endphp

@if ($errors->any())
    <div class="alert error">
        <strong>Please fix the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    action="{{ $editing ? route('users.update', $user) : route('users.store') }}"
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    @if ($editing)
        @method('PUT')
    @endif

    <label for="username">Username</label>
    <input
        type="text"
        id="username"
        name="username"
        value="{{ old('username', $user->username ?? '') }}"
    >

    @error('username')
        <p class="field-error">{{ $message }}</p>
    @enderror

    <label for="full_name">Full name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name', $user->full_name ?? '') }}"
    >

    @error('full_name')
        <p class="field-error">{{ $message }}</p>
    @enderror

    @if ($editing)
        <label for="avatar">Profile picture</label>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept="image/*"
        >

        <small>Image only, maximum 2 MB.</small>

        @error('avatar')
            <p class="field-error">{{ $message }}</p>
        @enderror
    @endif

    <button type="submit" class="button">
        {{ $editing ? 'Update User' : 'Create User' }}
    </button>

    <a href="{{ route('users.index') }}" class="button secondary">
        Cancel
    </a>
</form>