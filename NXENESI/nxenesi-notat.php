<?php
  session_start();
  $db=mysqli_connect("localhost","root","","lab-1");

$nxenesi_emri=isset($_SESSION['Emri'])? $_SESSION['Emri'] : '';
$nxenesi_mbiemri=isset($_SESSION['Mbiemri'])? $_SESSION['Mbiemri'] : '';
  
$sql="SELECT GjuheShqipe,Matematike,GjuheAngleze,ShkNatyrore,Art,Muzike,EdFizike,EdQytetare
from notat where EmriNxenesit='$nxenesi_emri $nxenesi_mbiemri'";
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $gjuheshqipe=$row['GjuheShqipe'];
    $matematike=$row['Matematike'];
    $anglisht=$row['GjuheAngleze'];
    $shkenca=$row['ShkNatyrore'];
    $art=$row['Art'];
    $muzike=$row['Muzike'];
    $edfizike=$row['EdFizike'];
    $edqytetare=$row['EdQytetare'];
  }
}else{
    echo "<script>alert('Nuk ka nota te disponueshme');</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NXENESI NOTAT E MIA</title>
    <link rel="stylesheet" href="notat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="majta">
    <div class="nxenesi">
            <i  id="user-icon" class="fa-solid fa-user-large fa-2xl"></i>
            <br>
            <h2 id="emri"><a href="nxenesi-faqjakryesore.php">NXENESI</a></h2>
            
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
        <button id="logout"><a href="logout.php">LOGOUT</a></button>

    </div>
    <div class="notat-new">
        <div class="nota">NOTAT</div>
        <table>
            <tr>
              <th style="text-decoration: underline;">Lëndët</th>
              <th style="text-decoration: underline;">Notat</th>
            </tr>
            <tr>
              <td>Gjuhë Shqipe</td>
              <td><?php echo $gjuheshqipe?></td>
            </tr>
            <tr>
              <td>Matematikë</td>
              <td><?php echo $matematike?></td>
            </tr>
            <tr>
              <td>Gjuhë Angleze</td>
              <td><?php echo $anglisht?></td>
            </tr>
            <tr>
              <td>Shkenca Natyrore</td>
              <td><?php echo $shkenca?></td>
            </tr>
            <tr>
              <td>Art</td>
              <td><?php echo $art?></td>
            </tr>
            <tr>
              <td>Muzike</td>
              <td><?php echo $muzike?></td>
            </tr>
            <tr>
              <td>Edukim Fizik</td>
              <td><?php echo $edfizike?></td>
            </tr>
            <tr>
              <td>EdQytetare</td>
              <td><?php echo $edqytetare?></td>
            </tr>
            <tr>
                <td style="color: red; font-weight: bolder; font-family: 'Sigmar', cursive;">Mesatarja</td>
                <td style="color: red; font-weight: bolder; font-family: 'Sigmar', cursive;"><?php
                
                $notat = array($gjuheshqipe, $matematike, $anglisht, $shkenca, $art, $muzike, $edfizike, $edqytetare);
                $mesatarja = array_sum($notat) / count($notat);
                echo number_format($mesatarja, 2); 
            ?></td>
                
              </tr>
          </table>
          
    </div>
    
      
      
</body>
</html>
