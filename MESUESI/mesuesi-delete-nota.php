<?php
$db=mysqli_connect("localhost","root","","lab-1");

$id=$_GET['id'];

$qry="DELETE From notat where notat_id='$id'";

if(mysqli_query($db,$qry)){
    header('location:mesuesi-ditari.php');
}
?>
