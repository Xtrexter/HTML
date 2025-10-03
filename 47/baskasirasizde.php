<!DOCTYPE HTML>
<html>	
	<head>
	<link rel="stylesheet" type="text/css" href="css/denemcss.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="hazirlikjs.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</head>

	<body>
		<div style="margin:auto;
				 margin-top:20px;
				 height:auto;
				 width:500px;
				 color:#8B0000;
				 border:2px solid black;
				 padding:25px;
				 background:#FFDEAD;">
		
	
	
			<form name="egitim" action="aga.php" method="post">
				<h3> Yazılım Uzmanı Bilgi Formu </h3> <br>
				<h4>Kişisel Bilgiler </h4>
					<br>
				
				TC Kimlik: <input type="text" name="tckimlik" placeholder="Tc Kimlik" class="form-control"> <br>
				Ad Soyad: <input type="text" name="adsoyad" placeholder="Ad Soyad" class="form-control"> <br>
				Yaş: <input type="text" name="yas" placeholder="Yaş" class="form-control" > <br>
				Mail Adres: <input type="email" name="eposta" placeholder="E-mail" class="form-control"> <br>
				
						Fotoğraf  Ekle <input type="file" name="dosya"  style="width:100px;"class="form-control"> <br>
					<h2> Meslek Deneyim</h2>
					
					Yazılıma Giriş Tarihi <input type="date" name="tarih" > <br><br>
					<table>
						<tr>
						 <td>Yazılım Deyimi</td>
						 <td>
						 <input type="radio" name="deneyim"> 1 - 5 yıl
						<br>
						 <input type="radio" name="deneyim"> 6 - 10 yıl
						 <br>
						 </td>
					</tr>
						
				</table> <br>
				
				Programlama Dilleri
				<select name="secme">
					<option>C#</option>
					 <option>PHP</option>
					 <option>Java</option>
					<option>Python</option>
					<option>JavaScript</option>
					<option>C++</option>
					<option>C</option>
					<option>Pascal</option>
				</select>
				<h3>Form Onay</h3>
				 <input type="checkbox" id="Checkbox" name="Checkbox"> Yukarıdaki bilgilerin
				doğruluğunu kabul ediyorum ve sözleşmeyi onaylıyorum.
				<br> <br>
				
				 <p id="sonuc"></p>
				
				<input type="submit" name="gonder" class="btn btn-primary" style="width: 310px;" onclick="return kontrolEt()"> <br> <br>
				<input type="reset" name="temizle" class="btn btn-danger" style="width: 310px;">
			</form>
			
		</div>
		

	</body>

</html>