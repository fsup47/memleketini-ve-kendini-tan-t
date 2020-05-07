
<html>
 
<head>
<meta charset="utf-8">
   <!--js(javascript, bootstrap, kendi still dosyam bağlantıları--> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/yourcode.js"></script> <!-- ikonlar için-->
 <link rel="stylesheet" href="css/stiller.css">
</head>
 
<body>
<div class="container" style="backgraound-color:red;">
	<form action="Giris.php" method="POST"> 
		<table border="1" cellpadding="4" cellspacing="2" align="center">
			<tr>
				<td colspan="2" align="center">Kullanıcı Girişi</td>
			</tr>
			<tr>
				<td>Kullanıcı adı</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Şifre</td>
				<td><input type="password" name="password" required ></td>
			</tr>
			<tr>
				<td><input type="submit" value="giris"  ></td>
			</tr>
		</table>
    </form>
</div>	
</body>
</html>