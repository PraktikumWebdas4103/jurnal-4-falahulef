<form action ="#" method="POST" enctype="multipart/form-data">
<td>Nama</td> <td>:</td> <br>
<td><input type="text" name="name"></td> <br>
<td>Hoby</td> <td>:</td> <br>
<input type="checkbox" name="hoby[]" value="Foot Ball"> Foot Ball <br>
<input type="checkbox" name="hoby[]" value="Volley"> Volley <br>
<input type="checkbox" name="hoby[]" value="Reading"> Reading <br>
<input type="checkbox" name="hoby[]" value="Travelling"> Travelling <br>
<input type="checkbox" name="hoby[]" value="Other"> Other <br>
<td>Foto</td> <td>:</td>
<td><input type="file" name="foto"></td> <br><br>

<td></td><td></td>
<td align="right"><input type="submit" name="submit" value="Kirim"></td>
</form>

<?php

if(isset($_POST['submit'])) {
	$picture = $_FILES['foto'];
	$name = $_POST['name'];
	echo "Wellcome $nama <br> Your Foto : <br><img src='$picture'> </img> <br> Your Hoby : <br>";
foreach ($_POST['hoby'] as $yourhoby) {
	echo "$yourhoby <br>";
}
}

$_POST['usename'] = 'falahulef';
$_POST['submit'] = 'submit';
$_POST['password'] = '12345';

if(isset($_POST['login'])) {
session_start();
$user = array('falahulef','sonia');
$pass = array('12345','67890');
if(in_array($_POST['usename'], $user)) {
$key = array_search($_POST['usename'], $user);
if($pass[$key]==$_POST['password']){
	$_SESSION['access'] = 1;
	echo "Selamat Datang $name";
} else {
	echo "Password salah";
}
}
}

?>
