function validateForm() 
{
    
    var username = document.getElementById("user_name").value;
    var password = document.getElementById("vpsw").value;
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
        ret=true;
       } 
        
    } 

    return ret;


}   