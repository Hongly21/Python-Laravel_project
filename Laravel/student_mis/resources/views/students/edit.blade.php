<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<style>
    /* Global Reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        background: linear-gradient(145deg, #f2f6fc, #d9e2ec);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    /* Card container */
    form {
        background: #ffffff;
        padding: 2rem 3rem;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        width: 100%;
        max-width: 400px;
        animation: fadeInUp 0.6s ease;
    }

    h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #222;
    }

    /* Label and Input */
    label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #444;
    }

    input[type="text"] {
        width: 100%;
        padding: 0.75rem;
        border: 1.8px solid #ccc;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 1.2rem;
    }

    input[type="text"]:focus {
        border-color: #0078D7;
        box-shadow: 0 0 0 3px rgba(0, 120, 215, 0.15);
        outline: none;
    }

    /* Button styling */
    button {
        width: 100%;
        padding: 0.8rem;
        background: #0078D7;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background: #005ea6;
    }

    /* Subtle Animation */
    @keyframes fadeInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<body>
    <div class="form-wrapper">
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
    </div>



</body>

</html>
