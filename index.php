<?php session_start(); ?>
<?php include("db.php"); ?> 
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    
      <div class="menu-bar">

        <ul>
                    
          <li class="active"><a href="index.php"><i class="fa fa-home" ></i>Home</a> </li>
          
         
          <li><a href="contact.php"><i class="fa fa-phone" ></i>Contact</a></li>
          <li><a href="#" ><i class="fa fa-info" ></i>About Us</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Team</a></li>
            </ul>
        </div>       
        
        </li>
         <li><a href="#"> <i class="fa fa-graduation-cap" ></i>Choose your stream</a>
            <div class="sub-menu-1">
                <ul>
                    <?php
                            include("db.php");
                            $sel="SELECT * FROM dept";
                            $rs=$con->query($sel);
                            while($row=$rs->fetch_assoc()){

                            ?>
                            <?php if(isset($_SESSION['cname'])){ ?>
                    <li class="hover-me"><a href="content.php?id=<?php  echo $row['dept_id']; ?>"><?php echo $row['dept_name'];?></a><i class="fa fa-angle-right" ></i>
                    
                    </li>
                     <?php } else { ?>
                    <li class="hover-me"><a onclick="fun()"><?php echo $row['dept_name'];?></a><i class="fa fa-angle-right" ></i>
                        <
                    </li>
                    <script>
                        function fun(){
                            alert('Login First');
                        }
                    </script>
                <?php } ?>
                   <!-- <li class="hover-me"><a href="ece.php">Electronics and Communication Engineering</a><i class="fa fa-angle-right" ></i>
                        
                    </li>
                    <li class="hover-me"><a href="me.php">Mechanical Engineering</a><i class="fa fa-angle-right" ></i>
                        
                    </li>
                    <li class="hover-me"><a href="ce.php">Civil Engineering</a><i class="fa fa-angle-right" ></i>
                        
                    </li> -->
                <?php } ?>
    
                </ul>      
            </div>
                   
        </li>
        <?php if(isset($_SESSION['cname'])){ ?>
            <?php
             $n=$_SESSION['cname'];
            ?>
            <li style="color: #fff;">Welcome <?php echo $n; ?></li>
            <li><a href="logout.php"><i class="fa fa-sign-in" ></i>Logout</a></li>

            <?php } else { ?>
        <li><a href="signup.php"><i class="fa fa-user-plus" ></i>Signup</a></li>
          <li><a href="login.php"><i class="fa fa-sign-in" ></i>Login</a></li>
          <?php } ?>
        </ul>
    </div>
<div class="welcome-text">
    <h1>
        WELCOME TO e-Library
    </h1>
<a href="#">Leave Your Feedback</a>
</div>

        
    
    
      
    

      </body>
      
</html>
