<?php
    session_start();
    $db=mysqli_connect("localhost","root","","lab-1");

    $mesuesi_id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';

    $sql="SELECT * from mesuesit where ID='$mesuesi_id' ";
    $result=$db->query($sql);

   

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $id=$row['Mesuesi_ID'];
            $emri=$row['Emri'];
            $mbiemri=$row['Mbiemri'];
            $email=$row['LoginEmail'];
            $adresa=$row['Adresa'];
            $telefoni=$row['NrTel'];
            $klasa=$row['Klasa'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MESUESI FAQJA KRYESORE</title>
<link rel="stylesheet" href="mesuesi-faqjakryesore.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="majta">
    <!-- <h1>MESUESI</h1> -->
    <div class="nxenesi">
        
        <i id="user-icon" class="fa-solid fa-crown fa-2xl"></i>
        <br>
        <h2 id="emri"><a href="#">MESUESI</a></h2>
        <b style="font-size: 40px;"><?php echo $emri." ".$mbiemri?></b>
    </div>
    <div class="opsionet">
            <div class="njoftimet">
                <a href="#"><?php echo $klasa?></a>
            </div>
        <div class="nxenesit">
        
            <i class="fa-solid fa-users"></i>
            <div class="dropdown">
            <button class="dropbtn"><a href="mesuesi-orari.php">ORARI IM</a></button>
              </div>
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
<div class="djathta">
    <div class="id-input">
        <label>ID:<?php echo $id?></label>
    </div>
    <div class="personale">
        <h1 id="personale1">TË DHËNAT PERSONALE</h1>
        <div class="emri">
            <label>EMRI:</label>
            <input type="text" id="input-emri" value="<?php echo $emri?>">
        </div>
        <div class="mbiemri">
            <label>MBIEMRI:</label>
            <input type="text" id="input-mbiemri" value="<?php echo $mbiemri?>">
        </div>
        <div class="personal">
            <label>EMAIL:</label>
            <input style="width: fit-content;" type="text" id="input-personal" value="<?php echo $email?>">
        </div>
        <div class="adresa">
            <label>ADRESA:</label>
            <input type="text" id="input-adresa" value="<?php echo $adresa?>">
        </div>
        <div class="tel">
            <label>NR.TEL:</label>
            <input type="text" id="input-tel" value="0<?php echo $telefoni?>">
        </div>
    </div>
    <div class="paga">
        <label>PAGA MOMENTALE</label>
        <input type="text" id="input-paga" value="600$">
    </div>
</div>
</body>
</html>
