<!DOCTYPE html>
<html lang="en">
<style>
    /* Global styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        padding: 20px;
    }

    /* Form container */
    form {
        background: #fff;
        padding: 2rem 3rem;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 400px;
        animation: fadeIn 0.5s ease-in-out;
    }

    /* Heading */
    h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
        margin-right: 20px
    }

    /* Labels and input fields */
    label {
        display: block;
        font-weight: 600;
        color: #444;
        margin-bottom: 0.5rem;
    }

    input[type="text"] {
        width: 100%;
        padding: 0.75rem;
        border: 1.5px solid #ccc;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-bottom: 1.2rem;
    }

    input[type="text"]:focus {
        border-color: #0078D7;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 120, 215, 0.2);
    }

    /* Submit button */
    button {
        width: 100%;
        padding: 0.75rem;
        background: #0078D7;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: #005EA6;
    }

    /* Subtle animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

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
