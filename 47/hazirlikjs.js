function kontrolEt()
{
	var checkbox= document.getElementById("Checkbox");
	
		if(checkbox.checked)
		{
			document.getElementById('sonuc').innerText = "Checkbox işaretlendi";
			return true;
		}
		else
		{
			document.getElementById('sonuc').innerText = "Checkbox işaretlenmedi aga";
			
			
		}
		return false;
}