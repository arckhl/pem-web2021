<?php
    date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="daftar.css">
</head>
<body>
	<div id="login-box">
	<div class="left-box">
		<h1> Daftar </h1>
        <form class="" action="form_add_aksi.php" method="POST">
		<input type="text" name="name" placeholder="Nama Lengkap"/>
		<input type="text" name="email" placeholder="Email"/>
		<input type="password" name="password" placeholder="Password"/>
		<input type="password" name="repassword" placeholder="RePassword"/>
		<button type="submit" name="submit" value=<?php echo date("h:i:sa"); ?> >Daftar</button>
	</div>

</body>
</html>