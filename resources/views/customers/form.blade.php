@php
    $editing = isset($customer);
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
    action="{{ $editing ? route('customers.update', $customer) : route('customers.store') }}"
    method="POST"
>
    @csrf

    @if ($editing)
        @method('PUT')
    @endif

    <label for="full_name">Full name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name', $customer->full_name ?? '') }}"
    >

    @error('full_name')
        <p class="field-error">{{ $message }}</p>
    @enderror

    <label for="email">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email', $customer->email ?? '') }}"
    >

    @error('email')
        <p class="field-error">{{ $message }}</p>
    @enderror

    <label for="phone">Phone</label>
    <input
        type="text"
        id="phone"
        name="phone"
        value="{{ old('phone', $customer->phone ?? '') }}"
    >

    @error('phone')
        <p class="field-error">{{ $message }}</p>
    @enderror

    <button type="submit" class="button">
        {{ $editing ? 'Update Customer' : 'Create Customer' }}
    </button>

    <a href="{{ route('customers.index') }}" class="button secondary">
        Cancel
    </a>
</form>