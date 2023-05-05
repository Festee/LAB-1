<?php
    $db=mysqli_connect("localhost","root","","lab-1");

    if(isset($_POST['submit'])){
        $mesuesi_id=$_POST['mesuesi_id'];
        $emri=$_POST['emri'];
        $mbiemri=$_POST['mbiemri'];
        $email=$_POST['email'];
        $telefoni=$_POST['telefoni'];
        $gjinia=$_POST['gjinia'];
        $datelindja=$_POST['datelindja'];
        $adresa=$_POST['adresa'];
        $login_email=$_POST['login_email'];
        $login_password=$_POST['login_password'];
        $klasa=$_POST['klasa'];

        $qry="INSERT into mesuesit values(null,'$mesuesi_id','$emri','$mbiemri','$email','$telefoni','$gjinia','$datelindja','$adresa','$login_email','$login_password','$klasa')";

        if(mysqli_query($db,$qry)){
            echo '<script>alert("U shtua mesuesi!")</script>';
        }
    }
    header('location:drejtori-lista-mesues.php');
?>
