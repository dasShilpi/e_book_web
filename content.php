<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/content.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <?php
  include("db.php"); 
     $id=$_GET['id']; 
     $sel="SELECT * FROM dept WHERE dept_id='$id'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){
      ?>
  <body background="images/<?php echo $row['img']; ?>">
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
    <div class="menu-bar">

        <ul>
                    
          <li class="active"><a href="index.php"><i class="fa fa-home" ></i>Home</a> </li>
          <li><a href="contact.php"><i class="fa fa-phone" ></i>Contact</a></li>
          
            </ul>
 


        </div>
        </ul>
    </div>
      <nav class="navbar">
        <div class="navbar">
          <?php 
           $dept_id=$_GET['id']; 
     $sql="SELECT * FROM semester";
    $rss=$con->query($sql);
    while($roww=$rss->fetch_assoc()){
      ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $roww['sem']; ?>
                    
                </button>
                <?php 
                $dept_id=$_GET['id'];
                $sem_id=$roww['sem_id'];
                ?>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <?php
                  $sql1="SELECT * FROM subject WHERE dept_id='$dept_id' AND sem_id='$sem_id' ";
                  $rs2=$con->query($sql1);
                  while($row2=$rs2->fetch_assoc()){
                    ?>
                  <li><a class="dropdown-item" href="details.php?id=<?php  echo $row2['sub_id']; ?>"><?php echo $row2['sub']; ?></a></li>
                  
                <?php } ?>
                </ul>
              
            </li>
          <?php } ?>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CHOOSE ANOTHER STREAM
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php
                 
                 $se="SELECT * FROM dept";
                $rs1=$con->query($se);
                while($row1=$rs1->fetch_assoc()){
                  ?>
                <li class= "dropdown-item"><a href="content.php?id=<?php  echo $row1['dept_id']; ?>"><?php echo $row1['dept_name']; ?></a><i class="fa fa-angle-right" ></i>
                <?php } ?>
                </li>
               

            </ul>
            
        </div>
      </nav>
<div class="welcome-text">
  <h3>
    <?php echo $row['dept_name']; ?>!
  </h3>
  <h1>
      YOU CAN DOWNLOAD THE BOOK BY CLICKING ON THE SUBJECT NAME.
  </h1>
  <h2>
    THESE BOOKS ARE SUGGESTED BY THE FACULTY OF OUR COLLEGE!
  </h2>
</div>
  </body>
<?php } ?>
</html>
