<?php session_start(); ?>
<?php include("db.php"); ?> 
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/details.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    
      <div class="menu-bar">
        <ul>            
          <li class="active"><a href="index.php"><i class="fa fa-home" ></i>Home</a> </li>
        </ul>
    </div>
<div class="container-fluid" >
    <?php
    include("db.php");
    
        $sub_id=$_GET['id'];
        $sel="SELECT * FROM  subject WHERE subject.sub_id='$sub_id'";
     $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){
    ?>
    <div class="row">
    <div class="col-md-12">
    	<h1 style="text-align:center;"><?php echo $row['sub']; ?></h1>
    </div>
</div>
<?php } ?>

   
    <div class="row">
    
    	 <?php
    $sel1="SELECT * FROM  book WHERE book.sub_id='$sub_id'";
     $rs1=$con->query($sel1);
    while($row1=$rs1->fetch_assoc()){
    ?>
    <div class="col-md-3">
    	<p ><iframe  src="book/<?php echo $row1['book']; ?>" style="border: black;border-width: 3px; border-style: solid;" ></iframe></p>
    	<a href="book/<?php echo $row1['book']; ?>"><h3 style="text-align: center;"><b><?php echo $row1['book_name']; ?></b></h3></a>
        <a href="book/<?php echo $row1['book']; ?>" target="blank" ><p style="text-align: center;">Download this pdf</p></a>
    	</div>
    	<?php } ?>

    
    </div>
 

</div>    
 </body>
      
</html>
