<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/global/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <title>Admin Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in-container blur">
            <form action="{{route('admin.authenticate')}}" method="POST">
            @csrf
                <h1>Admin</h1>
                <input type="text" name="username" value="{{old('username')}}"  placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">

            </div>
        </div>
    </div>
</body>

</html>
