<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  {{-- <form action="{{route('user.login')}}">
    @csrf
    <input type="email" name="email" id="" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="sign in">
  </form> --}}

  <h2>Login</h2>

  @if ($errors->any())
      <ul>
          @foreach ($errors->all() as $error)
              <li style="color:red;">{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  
  <form method="POST" action="{{ route('user.login') }}">
      @csrf
      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <label>
          <input type="checkbox" name="remember"> Remember Me
      </label><br>
      <button type="submit">Login</button>
    </form>

    <a href="{{route('register.form')}}">Don't have an account?</a>

</body>
</html>