<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    a{
      border-radius: 10px;
      padding: 0 1em;
    }

    
  </style>
  <title>Document</title>
</head>
<body>
<header class="flex p-4 bg-blue-400 text-black justify-center align-middle">
  <div class="w-[100%]">
    <h1 class=" font-bold text-[2em]">Student Registery</h1>
  </div>
    <div class="w-[100%] text-right ">
    <a href="{{route('user.logout')}}" class="border-[2px] border-solid-black font-bold">LOGOUT</a>
  </div>

</header>
<div class="h-fit w-screen justify-center align-middle bg-red-500 flex flex-column p-[5em]">

  @if($errors->any())
  @foreach ($errors as $error)
      <li>{{$error}}</li>
  @endforeach
  @endif
  
  <div class="flex gap-4 border-black border-solid-black border-[2px] border-black-solid p-4">
    
  <form action="{{route('register.student')}}" method="post" class="flex flex-col gap-4" >
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

  </div>

  <div class="p-4">
    
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

  </div>

</div>

</body>
</html>