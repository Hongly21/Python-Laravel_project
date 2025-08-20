<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Index</title>
</head>

<body>
  <h1>Student List</h1>
  <p><a href="{{ route('students.create') }}">Add</a></p>
  <table border="1px">
    <thead>
      <tr>
        <th>SID</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <td>{{ $student->sid }}</td>
          <td>{{ $student->name }}</td>
          <td>
            <a href="{{ route('students.show', $student) }}">View</a>
            |
            <a href="{{ route('students.edit', $student) }}">Edit</a>
            |
            <form method="POST" action="{{ route('students.destroy', $student) }}" style="display:inline">
              @csrf @method('DELETE')
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>
