<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <form action="{{route('user.register')}}" method="GET">
    @csrf
    <input type="text" placeholder="name" name="name" required>
    <input type="email" name="email" placeholder="email" required>
    @error('email') <span>Email already exist</span> @enderror

    <input type="password" name="password" id="pass" placeholder="password" required>
    @error('password') <span>Password must atleast have 6 characters</span> @enderror

    <input type="password" name="password_confirmation" id="confirmpass" placeholder="confirm password" required>
    @error('password_confirmation') <span>Password Not Match</span> @enderror
    <button type="submit">submit</button>
    <a href="{{route('login.form')}}">Already have an account?</a>
  </form>

</body>
</html>