<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div class="h-screen w-screen justify-center align-middle">

  <form method="post" action="{{ route('store') }}" style="padding: 1em; border: 2px solid black;">
    @csrf
    <label for="subject"> Subject:
      <input type="text" name="subject">
    </label>
    <label for="section"> Section:
      <input type="text" name="section">
    </label>
    <label for="description"> Description:
      <input type="text" name="description">
    </label>
    <label for="units"> Units:
      <input type="number" name="units">
    </label>
    <label for="Days"> Days:
      <input type="text" name="subject">
    </label>
    <label for="time"> Time:
      <input type="text" name="time">
    </label>
    <label for="submit">
      <input type="submit" value="GO">
    </label>

  </form>


  @if(isset($subject))
      {{ $subject }} {{ $section }} {{ $description }} {{ $units }} {{ $day }} {{ $time }}
  @endif    

  

</div>
 

</body>
</html>