function validateformlogin(){
   var a=document.getElementById("unamelog").value;   	
    var d=document.getElementById("passlog").value;	
	if(a==""||d=="")
	{ 
	alert("Fill the empty fields login");
	return false;
	}	  
	return true;
}
function validateformsignup(){
   var a=document.getElementById("uname").value;
    var b=document.getElementById("email").value;	
    var d=document.getElementById("pass").value;	
	if(a==""||b==""||d=="")
	{ 
	alert("Fill the empty fields signup");
	return false;
	}	
	 var atpos = b.indexOf("@");
    var dotpos = b.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
		{
        alert("Not a valid e-mail address");
		return false;
	}	
	return true;
}

