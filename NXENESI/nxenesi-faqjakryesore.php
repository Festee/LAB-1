<?php
session_start();
$db=mysqli_connect("localhost","root","","lab-1");

$nxenesi_id=isset($_SESSION['ID'])? $_SESSION['ID'] : '';

$sql="SELECT * from nxenesit where ID='$nxenesi_id'";
$result=$db->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $id=$row['NxenesiID'];
        $emri=$row['Emri'];
        $mbiemri=$row['Mbiemri'];
        $prindi=$row['EmriPrindit'];
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
    <title>NXENESI FAQJA KRYESORE</title>
    <link rel="stylesheet" href="faqjakryesore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="majta">
        
        <div class="nxenesi">
            <i  id="user-icon" class="fa-solid fa-user-large fa-2xl"></i>
            <br>
            <h2 id="emri"><a href="#">NXENESI</a></h2>
            <b style="font-size: 40px;"><?php echo $emri." ".$mbiemri?></b>
        </div>
        
        <div class="opsionet">
            <div class="orari">
                <i class="fa-sharp fa-solid fa-clock"></i>
                <a href="nxenesi-orari.php">ORARI IM</a>
            </div>
            <div class="materialet">
                <i class="fa-solid fa-book"></i>
                <a href="nxenesi-materialet.php">MATERIALET</a>
            </div>
            <div class="notat">
                <i class="fa-solid fa-list-check"></i>
                <a href="nxenesi-notat.php">NOTAT</a>
            </div>
            <div class="njoftimet">
                <i class="fa-solid fa-bell"></i>
                <a href="nxenesi-njoftimet.php">NJOFTIMET</a>
            </div>
            <div class="kalkulatori">
                <i class="fa-solid fa-calculator"></i>
                <a href="nxenesi-kalkulatori.php">KALKULATORI</a>
            </div>
        </div>
        <button id="logout"><a href="logout.php" onclick="logout()">LOGOUT</a></button>
    </div>
    <div class="djathta">
        <div class="id-input">
            <label>ID</label>
            <input type="text" id="id" value="<?php echo $id?>">
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
            <div class="prindi">
                <label>PRINDI:</label>
                <input type="text" id="input-prindi" value="<?php echo $prindi?>">
            </div>
            <div class="adresa">
                <label>ADRESA:</label>
                <input type="text" id="input-adresa" value="<?php echo $adresa?>">
            </div>
            <div class="tel">
                <label>NR.TEL:</label>
                <input type="text" id="input-tel" value="0<?php echo $telefoni?>">
            </div>
            <div class="tel">
                <label>KLASA:</label>
                <input type="text" id="input-tel" value="<?php echo $klasa?>">
            </div>
        </div>
        <div class="pagesat">
            <label>PAGESAT:</label>
            <input style="width:200px" type="text" id="input-pagesa" value="800€/Muaj">
        </div>
    </div><script>
        function logout() {
            if (confirm("Jeni të sigurtë që dëshironi të dilni?")) {
                // Ridrejto tek skripta PHP për të bërë logout
                window.location.href = "../LOGIN/login.php";
            }
        }
    </script>
</body>

</html>
