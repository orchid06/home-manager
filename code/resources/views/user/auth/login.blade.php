<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/global/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/style.css')}}">
    <title>Login</title>
</head>

<body>
    @include('errors.notify')
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('user.register')}}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <span>use your email for registration</span>

                <input type="text" name="name" value="{{old('name')}}" placeholder="Name" />
                <input type="text" name="username" value="{{old('username')}}" placeholder="Set an unique user name" />
                <input type="email" name="email" value="{{old('email')}}" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('user.login')}}" method="POST">
                @csrf

                <h1>Sign in</h1>
                <input type="email" name="email" value="{{old('email')}}" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Alreday have account ? Login with your credentials</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p> Don't have account ? Create one here</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
