<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESUESI LISTA E MATERIALEVE</title>
    <link rel="stylesheet" href="mesuesi-materialet.css">
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
        <h1 id="njoftimi">MATERIALET</h1>
        <div class="container">
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
            <div class="lenda">
                
                <h2><?php echo $row['Lenda']?></h2>
                <ol>
                    <li><?php echo $row['materiali1']?></li>
                    <li><?php echo $row['materiali2']?></li>
                    <li><?php echo $row['materiali3']?></li>
                    <li><?php echo $row['materiali4']?></li>
                    <li><?php echo $row['materiali5']?></li>
                </ol>
                <div class="buttons">
                    <a href="mesuesi-edit-material.php?id=<?php echo $id;?>"><button id="update"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <a href="mesuesi-delete-material.php?id=<?php echo $id;?>"><button id="delete"><i class="fa-solid fa-trash"></i></button></a>
                </div>
                
            </div>
            <?php
                      }
                    }
                ?>
        </div>
    </div>
    
</body>

</html>
