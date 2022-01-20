<?php session_start(); ?>
<?php 
include("db.php");
if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['password'];
    
    $sel="SELECT * FROM user WHERE email='$e' AND password='$p'";
    $rs=$con->query($sel);
    if($rs->num_rows>0){
        $row=$rs->fetch_assoc();
        $_SESSION['cid']=$row['id'];
        $_SESSION['cname']=$row['name'];
        header("location:index.php");

      
    }else{
        $er="Incorrect email/password";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="css/loginstyle.css">
    </head>
    <body>
        
<?php if(isset($er)){ ?>
                                        
                <div class="alert alert-danger">
                <strong><?php echo $er; ?></strong>
                </div> 
                           
            <?php } ?>
        <div class="menu-bar">

            <ul>
                        
              <li class="active"><a href="index.php"><i class="fa fa-home" ></i>Home</a> </li>
              <li class="active"><a href="signup.php"><i class="fa fa-user-plus" ></i>Signup</a></li>
              <li class="active"><a href="login.php"><i class="fa fa-sign-in" ></i>Login</a></li>
            </ul>
        </div>
        <div class="loginbox">
          <img src="img/avatar.jpg" class="avatar">
          <h1>Login here</h1>
          <form action="" method="POST">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="login" value="Login"><br>
            <a href="#">Lost your password?</a><br>
            <a href="signup.html">Don't have an account?</a>

          </form>
        </div>
          
    </body>
</html>
