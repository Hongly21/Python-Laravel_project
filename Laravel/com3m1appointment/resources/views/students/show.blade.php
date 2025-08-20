<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
</head>

<body>
  <h1>Show Student</h1>
  <label for="name">
    Name
  </label>
  <input type="text" readonly name="name" id="name" placeholder="Enter a name" value="{{ $student->name }}">
</body>

</html>
