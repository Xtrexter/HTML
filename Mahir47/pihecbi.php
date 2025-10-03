<!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/denemcss.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</head>

	<body>
		<div style="height:300px;
				 width:400px;
				 color:aliceblue;
				 border:2px solid black;
				 padding:25px;
				 background:crimson;">
				 
					<form name="giris" method="post" action="kontrol.php">
						<h3 style="text-align:center;"> Paswword Örneği</h3>
						<label>Kullanıcı Adı:</label>
							<input name="kulad" type="text" class="form-control">
						<label> Şifreniz: </label>
							<input type="password" name="sifre" class="form-control"> <br>
						      	
						<button type="submit" name="gonder" class="btn-surrces"	> Gönder </button>
						<button type="reset" name="gonder" class="btn-danger"> Temizle </button>
						
						
					</form>
				 
				 </div>
		
	</body>	

</html>