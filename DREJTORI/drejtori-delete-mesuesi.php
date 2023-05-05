<?php
    $db=mysqli_connect("localhost","root","","lab-1");

    $id=$_GET['id'];

    $qry="DELETE  from mesuesit where ID='$id' ";

    if(mysqli_query($db,$qry)){
        header('location:drejtori-lista-mesues.php');
    }
?>
