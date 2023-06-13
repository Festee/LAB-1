<?php
    session_start();
    $db=mysqli_connect("localhost","root","","lab-1");

    $klasa=isset($_SESSION['Klasa']) ? $_SESSION['Klasa'] : '';

    $sql="SELECT * from orari where Klasa='$klasa'";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
                    $klasa=$row['Klasa'];
                    $hene1=$row['Hene1'];
                    $hene2=$row['Hene2'];
                    $hene3=$row['Hene3'];
                    $hene4=$row['Hene4'];
                    $hene5=$row['Hene5'];
                    $marte1=$row['Marte1'];
                    $marte2=$row['Marte2'];
                    $marte3=$row['Marte3'];
                    $marte4=$row['Marte4'];
                    $marte5=$row['Marte5'];
                    $merkure1=$row['Merkure1'];
                    $merkure2=$row['Merkure2'];
                    $merkure3=$row['Merkure3'];
                    $merkure4=$row['Merkure4'];
                    $merkure5=$row['Merkure5'];
                    $enjte1=$row['Enjte1'];
                    $enjte2=$row['Enjte2'];
                    $enjte3=$row['Enjte3'];
                    $enjte4=$row['Enjte4'];
                    $enjte5=$row['Enjte5'];
                    $premte1=$row['Premte1'];
                    $premte2=$row['Premte2'];
                    $premte3=$row['Premte3'];
                    $premte4=$row['Premte4'];
                   $premte5=$row['Premte5'];
        }
    }else{
        echo "<script>alert('Nuk ka orar te disponueshem');</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESUESI ORARI</title>
    <link rel="stylesheet" href="mesuesi-orari.css">
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
    <h1 id="njoftimi">ORARI IM</h1>
    
    <div class="box">
        <?php
            // $qry="SELECT * from orari";
            // $run=$db->query($qry);
            // if($run->num_rows>0){
            //     while($row=$run->fetch_assoc()){
            //         $id=$row['ID'];
            //         $klasa=$row['Klasa'];
            //         $hene1=$row['Hene1'];
            //         $hene2=$row['Hene2'];
            //         $hene3=$row['Hene3'];
            //         $hene4=$row['Hene4'];
            //         $hene5=$row['Hene5'];
            //         $marte1=$row['Marte1'];
            //         $marte2=$row['Marte2'];
            //         $marte3=$row['Marte3'];
            //         $marte4=$row['Marte4'];
            //         $marte5=$row['Marte5'];
            //         $merkure1=$row['Merkure1'];
            //         $merkure2=$row['Merkure2'];
            //         $merkure3=$row['Merkure3'];
            //         $merkure4=$row['Merkure4'];
            //         $merkure5=$row['Merkure5'];
            //         $enjte1=$row['Enjte1'];
            //         $enjte2=$row['Enjte2'];
            //         $enjte3=$row['Enjte3'];
            //         $enjte4=$row['Enjte4'];
            //         $enjte5=$row['Enjte5'];
            //         $premte1=$row['Premte1'];
            //         $premte2=$row['Premte2'];
            //         $premte3=$row['Premte3'];
            //         $premte4=$row['Premte4'];
            //        $premte5=$row['Premte5'];
             
        ?>
        <div class="dita">
            <h2>E HENE</h2>
            <p>1.<?php echo $hene1?></p>
            <p>2.<?php echo $hene2?></p>
            <p>3.<?php echo $hene3?></p>
            <p>4.<?php echo $hene4?></p>
            <p>5.<?php echo $hene5?></p>
        </div>
        <div class="dita">
            <h2>E MARTE</h2>
            <p>1.<?php echo $marte1?></p>
            <p>2.<?php echo $marte2?></p>
            <p>3.<?php echo $marte3?></p>
            <p>4.<?php echo $marte4?></p>
            <p>5.<?php echo $marte5?></p>
        </div>
        <div class="dita">
            <h2>E MERKREU</h2>
            <p>1.<?php echo $merkure1?></p>
            <p>2.<?php echo $merkure2?></p>
            <p>3.<?php echo $merkure3?></p>
            <p>4.<?php echo $merkure4?></p>
            <p>5.<?php echo $merkure5?></p>
        </div>
        <div class="dita">
            <h2>E ENJTE</h2>
            <p>1.<?php echo $enjte1?></p>
            <p>2.<?php echo $enjte2?></p>
            <p>3.<?php echo $enjte3?></p>
            <p>4.<?php echo $enjte4?></p>
            <p>5.<?php echo $enjte5?></p>
        </div>
        <div class="dita">
            <h2>E PREMTE</h2>
            <p>1.<?php echo $premte1?></p>
            <p>2.<?php echo $premte2?></p>
            <p>3.<?php echo $premte3?></p>
            <p>4.<?php echo $premte4?></p>
            <p>5.<?php echo $premte5?></p>
        </div>
        
        <?php
        //     }
        // }
        ?>
    </div>
    
    
</body>

</html>
