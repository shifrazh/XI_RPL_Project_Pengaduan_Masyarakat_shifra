
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body bgcolor="#FFB7B7">
 <center>
	<h1>LOGIN</h1>
    <center/>
    <img src="login.png"
    style="display:block; margin:auto; widht:250px; height:250px;">
 <center>
	<div class="kotak_login">
		<center/>
 	<form>
            <center>
				<form actiom="proses_login.php" method="post">
            <label>Username</label>
			<input type="text" name="Email" class="form_login" placeholder=" ..">
            <center/>
 			<br>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="">
            <br/>
 			<br>
			<input type="submit" class="tombol_login" value="LOGIN">
</br>
        <p><font face="comic sans ms">Belum punya akun?</font>
        <a href="register.php"><font face="comic sans ms">Daftar disini</font></a>
			<br/>
			<br/>
			<center>
		</center>
		</form>
		</div>
 </body>
</html>
