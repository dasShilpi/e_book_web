<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/stylesign.css">
    </head>
    <body>
        
        <div class="menu-bar">

            <ul>
                        
              <li class="active"><a href="index.php"><i class="fa fa-home" ></i>Home</a> </li>
              <li class="active"><a href="signup.php"><i class="fa fa-user-plus" ></i>Signup</a></li>
              <li class="active"><a href="login.php"><i class="fa fa-sign-in" ></i>Login</a></li>
            </ul>
        </div>
           <div class="sign-up-form">
               <img src="img/avatar.jpg">
               <h1> Sign Up Now</h1>
               <form action="signupins.php" method="post"> 
                <input type="text" name="name" class="input-box" placeholder="Enter a Username"><span class="formerror"></span>
               <input type="email" name="email" class="input-box" placeholder="Your Email"><span class="formerror"></span>
               
               <input type="password" name="pass" class="input-box" placeholder="Create a password"><span class="formerror"></span>
               <input type="password" name="repass" class="input-box" placeholder="Confirm the password"><span class="formerror"></span>
               <p><span><input type="checkbox"></span>  I agree to the terms of services</p>
               <button type="submit" class="sign-btn" name="save">Sign Up</button>
               <hr>
               
               <p>Do you already have an account? <a href="login.php">Log in</a></p>
               </form>
           </div> 
    </body>
    <!-- <script>
        function seterror(id, error)
        {
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;
        }
function validateForm(){
var returnval = true;
var name = document.forms['myForm']["uname"].value;

if(name.length<8){
    seterror("name", "Length of username must be 8 characters");
    returnval = false;
}
return returnval;

}

    </script>> -->
</html>
