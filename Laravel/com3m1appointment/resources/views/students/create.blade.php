<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Add Student</h1>
  <form action="{{ route('students.store') }}" method="post">
    @csrf
    <label for="name">
      Name
    </label>
    <input type="text" name="name" id="name" placeholder="Enter a name">
    <button type="submit">Save</button>
  </form>
</body>

</html>
