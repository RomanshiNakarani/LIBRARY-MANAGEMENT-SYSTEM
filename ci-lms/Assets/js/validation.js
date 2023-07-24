function valid()
{

	var  a = /^[a-zA-Z\s]+$/;
	var  b = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/
	var  c= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,20}$/
	var  d=/^[_a-z0-9-]$/;
	var  N = document.getElementById("name").value;
	var  P = document.getElementById("er").value;
	var  E = document.getElementById("email").value;
	var  CP = document.getElementById("pass").value;
	var  CCP = document.getElementById("Cpass").value;
	var  f = document.getElementById("file").value;
	var  r = document.getElementById("role").value;
	var name2;
	//name	
	if(N=="")
	{
		document.getElementById("name1").innerHTML = "First Name Is Empty.";
		document.getElementById("name").style.borderBottom= "1px solid red"; 
		
		return false;
	 	
	}else
    if(N.length<3 || N.length>20){
		document.getElementById("name1").innerHTML = "  Name Is Must Be Greater Than 8 And Samller Than 20";
		document.getElementById("name").style.borderBottom= "1px solid red" ;
		return false;
	 	
	}else  
	if (a.test( N )) 
	{
		document.getElementById("name1").innerHTML = "";
		document.getElementById("name").style.borderBottom= "1px solid Green" ;
     	 name2=true; 
	}
    else 
    {
        document.getElementById("name1").innerHTML = "Invalid Name";
		document.getElementById("name").style.borderBottom= "1px solid red" ;
		return false;
	 	   
	}		
	//phone
	if(P=="")
	{
		document.getElementById("er1").innerHTML = " Enroll No. Is Empty.";
		document.getElementById("er").style.borderBottom= "1px solid red" ;
		return false;

		}
		else  
		{
			 document.getElementById("er1").innerHTML = "";
		    document.getElementById("er").style.borderBottom= "1px solid green" ;
			var er2= true;
		}

	//email
	if(E=="")
	{
		document.getElementById("email1").innerHTML = " Email Is Empty.";
		document.getElementById("email").style.borderBottom= "1px solid red"; 
		return false;
	 	
	}
	else  
	if (b.test( E )) 
	{
		document.getElementById("email1").innerHTML = "";
		document.getElementById("email").style.borderBottom= "1px solid Green" ;
       	var email2= true; 
	}
    else 
    {
        document.getElementById("email1").innerHTML = "Invalid Email Name";
		document.getElementById("email").style.borderBottom= "1px solid red" ;
		return false;
	 	   
	}


	if (f == "")
	{
		document.getElementById("file1").innerHTML = "Please select your profile picture";
		document.getElementById("file").style.borderBottom= "1px solid red"; 
		return false;
	}
	else
	{
		document.getElementById("file1").innerHTML = ""
		document.getElementById("file").style.borderBottom= "1px solid green" ;
		var file2= true;	
	}	

	if (r == "")
	{
		document.getElementById("role1").innerHTML = "Please select your role";
		
		return false;
	}
	else
	{
		document.getElementById("role1").innerHTML = ""
		//document.getElementById("role").style.borderBottom= "1px solid green" ;
		var role2= true;	
	}	

	//password
	
	if(CP=="")
	{
		document.getElementById("pass1").innerHTML = "Password Is Empty.";
		document.getElementById("pass").style.borderBottom= "1px solid red"; 
		return false;
	 	
	}else if(CP.length<8 || CP.length>20)
	{
		document.getElementById("pass1").innerHTML = " Password Is Must Be Greater Than 3 And Samller Than 20";
		document.getElementById("pass").style.borderBottom= "1px solid red" ;
		return false;
	 	
	}else if (c.test( CP )) {
    
    	document.getElementById("pass1").innerHTML = "";
		document.getElementById("pass").style.borderBottom= "1px solid Green" ;
		var pass2= true; 
	}
    else {
		document.getElementById("pass1").innerHTML = "Invalid Password Must Include Capital Letter and Digit ";
		document.getElementById("pass").style.borderBottom= "1px solid red" ;
		return false;
	 	   
	}
	//confirm password
	if (CP==CCP)
	{
		document.getElementById("Cpass1").innerHTML = ""
		document.getElementById("Cpass").style.borderBottom= "1px solid green" ;
		var Cpass2= true;	
	}
	else
	{
		document.getElementById("Cpass1").innerHTML = " Password Does not match";
		document.getElementById("Cpass").style.borderBottom= "1px solid red" ;
		return false;
	}

	


 	if (name2==true && er2==true && email2==true && pass2==true && Cpass2==true && file2==true && role2==true)
 	{
	 alert(" register Sucessfully");
	 return true;
	 
	 }
 	else
 	{
	 return false;
 	}

 	}