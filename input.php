<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-color: orange;
      }
      //tidak terpakai, tidak ada element <p>
      p {
        font-family : "Times New Roman";
        font-size : 40px;
        color : Green;
      }
    </style>
  </head>
  <body>
  <marquee><p><b>Belajar Web</b></p></marquee>
  <form action ="tambah.php" method="post">
    <fieldset>
      <legend><h1>Input Your Personal</h1></legend>
      <label>Username :</label><br>
      <input type="text" name="Username" id="username"><br>
      <label>Password :</label><br>
      <input type="text" name="Password" id="password"><br>
      <br>
      
      <input type="submit" value="Add"> 
      <input type="reset" value="Reset">
    </fieldset>
  </form>
</body>
</html>

