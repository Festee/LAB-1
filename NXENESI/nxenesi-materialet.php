<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NXENESI MATERIALET</title>
    <link rel="stylesheet" href="materialet.css">
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

    
    <div class="materiali">
        <div class="material">MATERIALET</div>
        <div class="lendet">
        <?php
        $qry="SELECT * from materialet";
        $run=$db->query($qry);
        if($run->num_rows>0){
            while($row=$run->fetch_assoc()){
                $id=$row['materiali_id'];
                            $lenda=$row['Lenda'];
                            $materiali1=$row['materiali1'];
                            $materiali2=$row['materiali2'];
                            $materiali3=$row['materiali3'];
                            $materiali4=$row['materiali4'];
                            $materiali5=$row['materiali5'];
          
    ?>
            <div class="box">
                <h2><?php echo $row['Lenda']?></h2>
                <ul>
                    <li><?php echo $row['materiali1']?></li>
                    <li><?php echo $row['materiali2']?></li>
                    <li><?php echo $row['materiali3']?></li>
                    <li><?php echo $row['materiali4']?></li>
                    <li><?php echo $row['materiali5']?></li>
                </ul>
            </div>
            <?php
              }
            }
            ?>
        </div>
    </div>
</body>
</html>
