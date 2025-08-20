@extends('layout')
@section('title', 'Appointments')
@section('content')
    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-2">Add Appointment</a>
    <table class="table table-bordered">
        <tr>
            <th>Customer</th>
            <th>Service</th>
            <th>Date/Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($appointments as $a)
            <tr>
                <td>{{ $a->customer->name }}</td>
                <td>{{ $a->service->name }}</td>
                <td>{{ $a->appointment_time }}</td>
                <td>{{ $a->status }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $a) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('appointments.destroy', $a) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
