function validation(){
  
    var username= document.getElementById('username').value;
    var password= document.getElementById('password').value;
    if( username==''|| password == ''||)
    {
        document.getElementById("result").innerHTML = "All field required";

       return false;
      }

      else if(username.length<8)
{
        document.getElementById("result").innerHTML = "username must 6 characters";

       return false;
      }

     else if(password.length<10) {
        document.getElementById("result").innerHTML = "username must 6 characters";

       return false;
      }
