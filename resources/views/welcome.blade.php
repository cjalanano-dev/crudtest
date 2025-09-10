<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testCRUD</title>
</head>
<body>


    @auth
        <h2>Welcome, {{ auth()->user()->name }}!</h2>
        <p>You are logged in.</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button>Register</button>
            </form>
        </div>

        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name">
                <input name="loginpassword" type="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
    @endauth


</body>
</html>
