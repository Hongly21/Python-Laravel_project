<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<style>
    /* Global reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: linear-gradient(to right, #e0eafc, #cfdef3);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    /* Card container */
    .card {
        background-color: #fff;
        padding: 2rem 3rem;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 480px;
        animation: slideUp 0.6s ease-in-out;
    }

    /* Heading */
    h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #222;
    }

    /* Label and input */
    label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #555;
    }

    input[readonly] {
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #ddd;
        border-radius: 10px;
        background-color: #f9f9f9;
        color: #666;
        font-weight: 500;
        transition: border 0.3s ease;
    }

    input[readonly]:hover {
        border-color: #aaa;
    }

    /* Subtle animation */
    @keyframes slideUp {
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
    <div class="card">
        <h1>Show Student</h1>
        <label for="name">Name</label>
        <input type="text" readonly name="name" id="name" value="{{ $student->name }}">
    </div>

</body>

</html>
