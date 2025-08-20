@extends('layout')
@section('title', 'Services')
@section('content')
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-2">Add Service</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Duration</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($services as $s)
            <tr>
                <td>{{ $s->name }}</td>
                <td>{{ $s->duration }} mins</td>
                <td>$ {{ $s->price }}</td>
                <td>
                    <a href="{{ route('services.edit', $s) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('services.destroy', $s) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
