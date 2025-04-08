<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar dulu ga sie</h1>
    <form action="/welcome" method="POST">
        @csrf
      <label for="">fulname</label><br>
      <input type="text" name="fullname"><br> <br>
      <label for="">lastname</label><br>
      <input type="text" name="lastname" cols="30" rows="10"></input><br> <br>
     
      <label >gender</label><br>

      <select name="" id="">
        <option value="indo">indo</option>
        <option value="malay">malay</option>
        <option value="zimbabwe">zimbabwe</option>
      </select>

<input type="radio"  value="man">
<label >man</label><br>
<input type="radio"  value="ladies">
<label >ladies</label><br> <br>

<label for="">masukan pesan dan kesan</label><br><br>
<textarea name="text" cols="30" rows="10">

</textarea>
<input type="submit" value="daftar"><br>
    </form>
    <h5><a href="/">kembali</a></h5>
</body>
</html>