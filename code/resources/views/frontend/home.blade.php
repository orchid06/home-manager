<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Home Manager </title>
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo"><a href="#">LOGO></a></div>
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Latest</a></li>
        <li><a href="#">Offers</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="buttons">
        <a href="{{ route('user.login') }}" class="button">Login</a>
        <a href="{{ route('user.register') }}" class="button">Register</a>
      </div>
    </nav>
    <div class="text-content">
      <h2>Learn To Enjoy,<br>Every Moment Of Your Life</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum facere in nam, officiis aspernatur consectetur aliquid sequi possimus et. Sint.</p>
    </div>
  </header>

</body>
</html>
