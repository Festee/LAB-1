<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESUESI SHTO MATERIAL</title>
    <link rel="stylesheet" href="mesuesi-shto-material.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="majta">
<div class="nxenesi">
        <i id="user-icon" class="fa-solid fa-crown fa-2xl"></i>
        <br>
        <h2 id="emri"><a href="mesuesi-faqjakryesore.php">MESUESI</a></h2>
    </div>
    <div class="opsionet">
        
        <div class="nxenesit">
            <i class="fa-solid fa-users"></i>
            <a href="mesuesi-orari.php">ORARI IM</a>
        </div>
        <div class="njoftimet">
        <i class="fa-solid fa-chalkboard-user"></i>
            <div class="dropdown">
                <button class="dropbtn">DITARI</button>
                <div class="dropdown-content">
                    <a href="mesuesi-ditari.php">LISTA NOTAVE</a>
                    <a href="mesuesi-shto-note.php">SHTO NOTE</a>
                </div>
            </div>
        </div>
        <div class="oraret">
        <i class="fa-sharp fa-solid fa-book"></i>
            <div class="dropdown">
                <button class="dropbtn">MATERIALET</button>
                <div class="dropdown-content">
                <a href="mesuesi-materialet.php">LISTA</a>
                <a href="mesuesi-shto-materiale.php">SHTO MATERIAL</a>
                </div>
              </div>
        </div>
        <div class="njoftimet">
                <i class="fa-solid fa-bell"></i>
                <a href="mesuesi-njoftimet.php">NJOFTIMET</a>
            </div>
    </div>
    <button id="logout"><a href="logout.php">LOGOUT</a></button>
</div>
    <div class="djathtas">
        <h1 id="njoftimi">SHTO MATERIAL</h1>
        <div class="box">
            <form action="" method="post" style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
            <h2><input type="text" name="lenda" id="lendaa" placeholder="Lënda..."></h2>
            <ol>
                <li><input type="text" name="materiali1"></li>
                <li><input type="text" name="materiali2"></li>
                <li><input type="text" name="materiali3"></li>
                <li><input type="text" name="materiali4"></li>
                <li><input type="text" name="materiali5"></li>
            </ol>
            <button id="shto" type="submit" name="submit" value="Subnmit">SHTO</button>
            </form>
        </div>
    </div>
    
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $lenda=$_POST['lenda'];
        $materiali1=$_POST['materiali1'];
        $materiali2=$_POST['materiali2'];
        $materiali3=$_POST['materiali3'];
        $materiali4=$_POST['materiali4'];
        $materiali5=$_POST['materiali5'];

        $qry="INSERT into materialet values (null,'$lenda','$materiali1','$materiali2','$materiali3','$materiali4','$materiali5')";

        if(mysqli_query($db,$qry)){
            echo '<script>alert("U shtuan materialet")</script>';
        }
    }
?>
