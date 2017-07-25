function validate_setting()
{
  var opass=document.setting.old_password.value;
  var npass=document.setting.new_password.value;
  var rpass=document.setting.re_password.value;
  var status= true;
  
  if(npass.length<6 || rpass.length< 6)
  {
	  
	  alert("password must be greater than 5");
	  return false;
  }
  
  else if(npass!=opass)
  {
	  alert("password must be same");
	   return false;
  }
  
  return status;
	  
    

}