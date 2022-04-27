function validateForm() 
{
    
    var username = document.getElementById("user_name").value;
    var password = document.getElementById("vpsw").value;
    var accountno = document.getElementById("account_no").value;
    var address = document.getElementById("vaddress").value;
    var ret=false;
    if (username == "") {
     document.getElementById("errorusername").innerText="Please fill out first name";
    }
    else
    {
        document.getElementById("errorusername").innerText="";
    if (password.length < 8) {
        document.getElementById("errorpass").innerHTML="Please enter 8 character password";
      }
    else{
        document.getElementById("errorpass").innerHTML="";
    if (accountno.length < 10 || accountno.length > 10){
        document.getElementById("erroraccountno").innerHTML="Please enter account no";
      }
    else{
        document.getElementById("erroraccountno").innerHTML="";
    if (address.length<1)
    {
      document.getElementById("erroraddress").innerHTML="Please enter your address";
    }
    else 
    { 
        document.getElementById("erroraddress").innerHTML="";
        ret=true;
     }
    }
  }
}
return ret;

}