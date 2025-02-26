<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../javascript/log.css">
   <script>
    
function chan(){

var mail=document.getElementById("mail").value;
var password=document.getElementById("password").value;
m=/^([a-z]{5})+\@([a-z]{5})+\.([a-z]{3})+$/;
var checkbox=document.getElementById("checkbox").value;

if(!m.test(mail)){
window.alert("enter an mail");
}
if(password==""){

    window.alert(" enter  password");
}

if(checkbox==" " ){
    window.alert("click the box");
}
}
   </script>

</head>
<body>
    
    <div>
        <form action="../javascript/Bootstrap.html">
            <table>
                <h1>LOG IN</h1>
   
        <tr>
            <td class="name"> Gmail   </td>
            <td><input type="text" name="" id="mail" placeholder="Enter your mail"></td>
        </tr>
        <tr>
            <td class="name">Password </td>
            <td><input type="password" placeholder="password" id="password"></td>
        </tr>
        <tr>
            
            <td><input type="checkbox" name="" id="checkbox" style="margin-left: 30%; height:20px; "></td>
            <td></td>
            <td><a href=""style="color: white;text-decoration: none;font-size: larger;" >Log In</a ></td>
        </tr>
        
<td></td>
                    <td><button onclick="chan()">Sign Up</button></td>
                </tr>
            
        </tr>
        
    </table>
</form>
    </div>
</body>
</html>