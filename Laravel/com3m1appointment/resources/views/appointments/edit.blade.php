@extends('layout')
@section('title', 'Edit Appointment')
@section('content')
    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')
        <select name="customer_id" class="form-control mb-2" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $appointment->customer_id ? 'selected' : '' }}>
                    {{ $customer->name }}</option>
            @endforeach
        </select>
        <select name="service_id" class="form-control mb-2" required>
            @foreach ($services as $service)
                <option value="{{ $service->id }}" {{ $service->id == $appointment->service_id ? 'selected' : '' }}>
                    {{ $service->name }}</option>
            @endforeach
        </select>
        <input type="datetime-local" name="appointment_time"
            value="{{ \Carbon\Carbon::parse($appointment->appointment_time)->format('Y-m-d\TH:i') }}"
            class="form-control mb-2" required>
        <select name="status" class="form-control mb-2" required>
            <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
