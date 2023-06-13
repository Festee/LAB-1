<?php
    $db=mysqli_connect("localhost","root","","lab-1");

    $id=$_GET['id'];

    $qry="DELETE from materialet where materiali_id= '$id'";

    if(mysqli_query($db,$qry)){
        header('location:mesuesi-materialet.php');
    }
?>
