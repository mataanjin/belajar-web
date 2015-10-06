<?php
//File ini akan meminta user untuk login ke sistem
//jika user terdaftar dan benar, maka akan mengisi $_SESSION['id'] dengan id usernya
//Ingat session sudah di start di file index dan connection juga sudah di include

//PHPDoc untuk bantu mengidentifikasi tipe dari varibale agar bantu di IDE netbeans
/* @var $db PDO */

//Filter apapun yang datang dari user dan jangan mengubah input
$inputs = filter_input_array(INPUT_POST);
if ($inputs['ok']) {
  //Cek login
  //Gunakan prepared statement supaya aman, tanda ? untuk di bind kedepannya, bisa juga menggunakan :name, baca di manual pdo
  $sql = 'SELECT Id FROM tabel_user WHERE Username = ? AND Password = ?';
  $p = $db->prepare($sql);
  //tanda [ dan ] adalah kependekan dari inisiasi array, jadi execute membutuhkan array sebanyak tanda ? yang ada di $sql
  $p->execute([$inputs['Username'], $inputs['Password']]);
  if ($_SESSION['id'] = $p->fetch()['Id']) {
    //Redirect saja kalo berhasil
    die('Login berhasil.<meta HTTP-EQUIV="REFRESH" content="2;url=index.php">');
  } else {
    $msg = 'Username or password didn\'t match.';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Screen</title>
    <style>
      body {
        background-color: orange;

        font-family : "Times New Roman";
        font-size : 40px;
        color : Green;
      }
    </style>
  </head>
  <body>
  <marquee><p><b>Belajar Web</b></p></marquee>
  <form method="post">
    <?= $msg . '<br>' ?>
    <fieldset>
      <legend><h1>Please login to the system.</h1></legend>
      <label>Username :</label><br>
      <input type="text" name="Username" id="username"><br>
      <label>Password :</label><br>
      <input type="text" name="Password" id="password"><br>
      <br>

      <input type="submit" name="ok" value="Login">
    </fieldset>
  </form>
</body>
</html>

