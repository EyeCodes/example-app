<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if($errors->any())

  @foreach ($errors as $error)
  <li class="font-color red">{{$error}}</li>
@endforeach
@endif
<form action="{{route('update.stud', ['id'=>$students->id])}}" method="post">
@csrf

<input type="text" name="fname" id="fname" placeholder="first name" value="{{$students->fname}}" >
<input type="text" name="mname" id="mname" placeholder="middle name" value="{{$students->mname}}">
<input type="text" name="lname" id="lname" placeholder="last name" value="{{$students->lname}}">
<input type="text" name="suffix" id="suffix" placeholder="suffix" value="{{$students->suffix}}">
<label for="">
  <span>Gender:</span> 
<input type="radio" name="gender" id="male" placeholder="Male" value="M" >M
<input type="radio" name="gender" id="female" placeholder="Female" value="F" >F
</label>
<label for="">
  Birthdate <input type="date" name="birthdate" value="{{$students->birthdate}}">
</label>
<input type="submit">
</form>
</body>
</html>