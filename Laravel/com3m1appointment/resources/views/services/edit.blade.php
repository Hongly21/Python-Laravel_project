@extends('layout')
@section('title', 'Edit Service')
@section('content')
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $service->name }}" class="form-control mb-2" placeholder="Service Name"
            required>
        <input type="number" name="duration" value="{{ $service->duration }}" class="form-control mb-2"
            placeholder="Duration (minutes)" required>
        <input type="number" step="0.01" name="price" value="{{ $service->price }}" class="form-control mb-2"
            placeholder="Price ($)" required>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
