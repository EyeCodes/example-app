<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('register.student')}}" method="post">
    @csrf
    <input type="text" name="fname" id="fname" placeholder="first name" required>
    <input type="text" name="mname" id="mname" placeholder="middle name">
    <input type="text" name="lname" id="lname" placeholder="last name" required>
    <input type="text" name="suffix" id="suffix" placeholder="suffix">
    <label for="">
      <span>Gender:</span> 
    <input type="radio" name="gender" id="male" placeholder="Male" value="M" required>M
    <input type="radio" name="gender" id="female" placeholder="Female" value="F" required>F
    </label>
    <label for="">
      Birthdate <input type="date" name="birthdate">
    </label>
    <input type="submit">
  </form>
</body>
</html>