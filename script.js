function ifAddressSame()
{
	var ch=document.getElementById("check");
	var ad=document.getElementById("add");
	if(ch.checked){
		document.getElementById("add2").value=ad.value;
		document.getElementById("zip2").value=document.getElementById("zip").value;
	}
	else{
		document.getElementById("add2").value="";
		document.getElementById("zip2").value="";
	}
}
