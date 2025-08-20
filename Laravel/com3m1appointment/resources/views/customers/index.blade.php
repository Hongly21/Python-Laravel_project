@extends('layout')
@section('title', 'Customers')
@section('content')
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-2">Add Customer</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($customers as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->phone }}</td>
                <td>
                    <a href="{{ route('customers.edit', $c) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('customers.destroy', $c) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
