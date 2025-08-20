<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
</head>

<body>
  <h1>Edit Student</h1>
  <form action="{{ route('students.update', $student) }}" method="post">
    @csrf
    @method('put')
    <label for="name">
      Name
    </label>
    <input type="text" name="name" id="name" placeholder="Enter a name" value="{{ $student->name }}">
    <button type="submit">Update</button>
  </form>

</body>

</html>
