<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  <style>
    th, td, tr, table, tbody{
      width: fit-content;
      outline: auto;
      margin: 5em 0;

    }

    thead, tbody *{
      padding: .5em;
      font-size: 1.2rem;
    }
    a{
      border-radius: 10px;
      padding: 0 1em;
    }

    
  </style>
  <title>Document</title>
</head>
<body>
  @if($errors->any())
  @foreach ($errors as $error)
      <li>{{$error}}</li>
  @endforeach
  @endif
  <form action="{{route('register.student')}}" method="post">
    @csrf
    <input type="text" name="fname" id="fname" placeholder="first name" >
    <input type="text" name="mname" id="mname" placeholder="middle name">
    <input type="text" name="lname" id="lname" placeholder="last name" >
    <input type="text" name="suffix" id="suffix" placeholder="suffix">
    <label for="">
      <span>Gender:</span> 
    <input type="radio" name="gender" id="male" placeholder="Male" value="M" >M
    <input type="radio" name="gender" id="female" placeholder="Female" value="F" >F
    </label>
    <label for="">
      Birthdate <input type="date" name="birthdate">
    </label>
    <input type="submit">
  </form>

  <div>
    <a href="{{route('user.logout')}}">LOGOUT</a>
  </div>

<table style="width:fit-content; padding: 5 5em; border: 1px solid black;">
  <thead>
    <th>id</th>
    <th>
      Name
    </th>
    <th>
      Gender
    </th>
    <th>
      Birthdate
    </th>
  </thead>
  <tbody>
    @foreach ($students as $student )
 <tr>
  <td>
    {{$student->id}}
  </td>
  <td>
    {{$student->lname}}, {{$student->fname}}, {{$student->mname}}, {{$student->suffix}}
  </td>
  <td>
    {{$student->gender}}
  </td>
  <td>
    {{$student->birthdate}}
  </td>
  <td>
    <a style="background-color: greenyellow" href='{{route('update.students', ['id'=>$student->id])}}' class="bg-red-500">Update</a>
  </td>
  <td>
    <a style="background-color: red" href="{{route('delete.students',['id'=>$student->id])}}" class="bg-red-500">Delete</a>
  </td>
 </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>