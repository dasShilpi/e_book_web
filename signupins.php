<?php 
if(isset($_POST['save'])){
	$n=$_POST['name'];
	$e=$_POST['email'];
    
    $p=$_POST['pass'];
    $rp=$_POST['repass'];
include("db.php");
$sql="INSERT INTO user SET name='$n', email='$e',password='$p' , re_password='$rp'";
$con->query($sql);
header("location:login.php");
?>

<?php } else {
	echo "acces denied";
}
?>