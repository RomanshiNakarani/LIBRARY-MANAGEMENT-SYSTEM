function login(){
var  Z = document.getElementById("luname").value;
var  CP = document.getElementById("lpass").value;
var  c= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,20}$/


if(Z==""){
document.getElementById("luname1").innerHTML = " Username Is Empty.";
document.getElementById("luname").style.borderBottom= "1px solid red";
return false;
}else{
document.getElementById("luname1").innerHTML = "";
document.getElementById("luname").style.borderBottom= "1px solid Green" ;
     
var luname2=true;
}

if(CP=="")
	{
		document.getElementById("lpass1").innerHTML = "Password Is Empty.";
		document.getElementById("lpass").style.borderBottom= "1px solid red"; 
		return false;
	 	
	}else if(CP.length<8 || CP.length>20)
	{
		document.getElementById("lpass1").innerHTML = " Password Is Must Be Greater Than 3 And Samller Than 20";
		document.getElementById("lpass").style.borderBottom= "1px solid red" ;
		return false;
	 	
	}else if (c.test( CP )) {
    
    	document.getElementById("lpass1").innerHTML = "";
		document.getElementById("lpass").style.borderBottom= "1px solid Green" ;
		var lpass2= true; 
	}
    else {
		document.getElementById("lpass1").innerHTML = "Invalid Password Must Include Capital Letter and Digit ";
		document.getElementById("lpass").style.borderBottom= "1px solid red" ;
		return false;
	 	   
	}
	if(luname2==true && lpass2==true)
	{
		alert("Welcome to home page")
		return true;
	}
	else
	{
 		return false;
	}

/*if(H==""){
document.getElementById("lpass1").innerHTML = " Password Is Empty.";
document.getElementById("lpass").style.borderBottom= "1px solid red";
return false;
}
else{
document.getElementById("lpass1").innerHTML = "";
document.getElementById("lpass").style.borderBottom= "1px solid Green" ;
     
var lpass2=true;
}
if(luname2==true && lpass2==true)
{
alert("Welcome to home page")
return true;
}
else
{
 return false;
}*/
}
