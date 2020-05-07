<?php

	if(isset($_POST['submit']))
	{
		$un=$_POST['username'];
		$pw=$_POST['password'];
	
		if($un=='b181210039@sakarya.edu.tr' and $pw=='123')
		{
          echo "başarılı";
			
		}
		else
		{
			echo "kullanıcı adı veya şifre hatalı!";
		}
			
		 
	
	}


?>
<!--hatalı login olmaya karşın siteye ulaşmak içindir-->
<html>
<Body>
<a href="mardin_anasayfa.html">Siteye Git</a>
</body>
</html>