@extends('layout')
@section('title', 'Add Customer')
@section('content')
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
        <button class="btn btn-success">Save</button>
    </form>
@endsection
