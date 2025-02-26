<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Stock Management System</title>
</head>
<style>
    /* Style for the entire body */
.form-body{
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; /* Centers the form horizontally */
    align-items: center; /* Centers the form vertically */
    height: 100vh; /* Ensures the body covers the full viewport height */
}

/* Style for the form container */
.formdiv {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;
    width: 300px;
    text-align: center;
}
/* Form heading */
.formdiv p {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

/* Label and input container */
.oneline {
    margin-bottom: 15px;
    text-align: left;
}

/* Labels */
label {
    display: block;
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

/* Input fields */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Submit button */
button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

/* Add spacing for better mobile experience */
@media (max-width: 480px) {
    .formdiv {
        width: 90%;
    }
}
.dashboard-body{
    background-color: #040445;
}
.navbar{
    float: left;
    text-decoration: none;
}
</style>
<body class="form-body">

    <header class="header">
        <h1>Stock Management System</h1>
        <p>Manage your inventory with ease.</p>
    </header>

    <div class="form-container">
        <form action='/Login' method="POST">
            @csrf
            <div class="formdiv">
                <p class="form-title">Login</p>
                @if(session('success'))
                <p>{{session('success')}}</p>
                @endif
                @if(session('error'))
                <p>{{session('error')}}</p>
                @endif
                <div class="oneline">
                    <label for="username">Username:</label>
                    <input type="text"  name="username" placeholder="Enter your username" required>
                    @error('username') <p>{{'$message'}}</p>@enderror
                </div>
                <div class="oneline">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    @error('password') <p>{{$message}}</p>@enderror
                </div>
                <button type="submit"  class="form-button">Login</button>
                <p class="signup-link">
                    Don't have an account? <a href='/Signup'>Sign up</a>
                </p>
            </div>
        </form>
    </div>

</body>
</html>
