@extends('layout')
@section('title', 'Add Appointment')
@section('content')
    <form action="{{ route('appointments.store') }}" method="POST">

        @csrf
        <select name="customer_id" class="form
-control mb
-2" required>
            <option value="">Select Customer</option>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <select name="service_id" class="form
-control mb
-2" required>
            <option value="">Select Service</option>
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
        <input type="datetime
-local" name="appointment_time" class="form
-control mb
-2" required>
        <select name="status" class="form
-control mb
-2" required>
            <option value="pending">Pending</option>
            <option value="confirmed">Confirmed</option>
            <option value="cancelled">Cancelled</option>
        </select>
        <button class="btn btn
-success">Save</button>
</form> @endsection
