@extends('layout')
@section('title', 'Add Service')
@section('content')
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Service Name" required>
        <input type="number" name="duration" class="form-control mb-2" placeholder="Duration (minutes)" required>
        <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price ($)" required>
        <button class="btn btn-success">Save</button>
    </form>
@endsection
