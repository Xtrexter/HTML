<!DOCTYPE HTML>
<html>	
	<head>
	<link rel="stylesheet" type="text/css" href="css/denemcss.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</head>

	<body>
		<div style="margin:auto;
					 margin-top:20px;
					 height:auto;
					 width:500px;
					 color:black;
					 border:2px solid black;
					 padding:25px;
					 background:honeydew;margin:100px;">
		
			<form name="egitim" action="giris.php" method="post">
				<h3> Kodlama Eğitimi </h3> <br>
				<h5>İletişim Formu </h5>
				<label> bla bla bla</label> <br>
				
				<input type="text" name="kulad" placeholder="Ad">
				<input type="text" name="soyad" placeholder="Soyad"> <br> <br>
				<input type="tel" name="telefon" placeholder="(xxx)xxx xxx xxx">
				<input type="radio" value="kadin" name="cinsiyet">Kadın        
				<input type="radio" value="erkek" name="cinsiyet" >Erkek <br> <br>	
				<input type="email" name="eposta" id="eposta" placeholder="E-mail" style="width: 310px;"> <br> <br>
				<textarea rows="4" cols="40" placeholder="Özgeçmiş" name="aciklama"> </textarea> <br> <br>
				<input type="submit" name="gonder" class=" btn btn-success" style="width: 310px;"> 
				
				
			
			</form>
			
		</div>
		

	</body>

</html>