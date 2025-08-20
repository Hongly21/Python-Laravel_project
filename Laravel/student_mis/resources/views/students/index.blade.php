<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Index</title>
</head>
<style>
    /* Global reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
    }

    body {
        background: linear-gradient(to right, #fdfbfb, #ebedee);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 40px 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    /* Container styling */
    .container {
        width: 100%;
        max-width: 900px;
        background: #ffffff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    thead {
        background-color: #0078D7;
        color: white;
    }

    th,
    td {
        padding: 0.85rem 1rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tbody tr:hover {
        background-color: #f1f5f9;
    }

    /* Action links and buttons */
    td a,
    td button {
        margin-right: 8px;
        color: #0078D7;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    td a:hover,
    td button:hover {
        color: #005EA6;
    }

    button {
        border: none;
        background: none;
        cursor: pointer;
    }

    /* Responsive tweak */
    @media (max-width: 600px) {

        th,
        td {
            padding: 0.6rem;
            font-size: 14px;
        }

        .container {
            padding: 1.2rem;
        }
    }

    /* Table Container */
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Inter', sans-serif;
        margin-top: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border-radius: 10px;
        overflow: hidden;
    }

    /* Table Head */
    thead {
        background-color: #0078D7;
        color: #fff;
    }

    thead th {
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        font-size: 16px;
    }

    /* Table Body */
    tbody tr {
        background-color: #fff;
        transition: background 0.3s ease;
    }

    tbody tr:hover {
        background-color: #f4f8fc;
    }

    tbody td {
        padding: 0.9rem 1rem;
        border-top: 1px solid #e0e0e0;
        color: #333;
        font-size: 15px;
    }

    /* Actions Styling */
    td a {
        margin-right: 8px;
        text-decoration: none;
        color: #0078D7;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    td a:hover {
        color: #005499;
    }

    td form {
        display: inline;
    }

    td button {
        background: none;
        border: none;
        color: #d90429;
        font-weight: 500;
        cursor: pointer;
        padding: 0;
        transition: color 0.3s ease;
    }

    td button:hover {
        color: #a8001a;
    }
</style>

<body>
    <div class="container">
        <h1>Student List</h1>
        <p><a href="{{ route('students.create') }}" style="background-color: #0078D7; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Add</a></p>
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
                            <form method="POST" action="{{ route('students.destroy', $student) }}"
                                style="display:inline">
                                @csrf @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</body>

</html>
