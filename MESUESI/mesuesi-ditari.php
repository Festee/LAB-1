<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESUESI DITARI</title>
    <link rel="stylesheet" href="mesuesi-ditari.css">
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
    <h1 id="njoftimi">DITARI</h1>
    <form>
 
</form>

    
    <table>
   
        <tr>
        <th>Emri i nxenesit</th>
        <th>Klasa</th>
        <th>Gjuhe Shqipe</th>
        <th>Matematikë</th>
        <th>Anglisht</th>
        <th>Shk.Natyrore</th>
        <th>Art</th>
        <th>Muzike</th>
        <th>Ed.fizike</th>
        <th>Edukim qytetar</th>
    </tr>
    <?php
        $qry="SELECT * from notat";
        $run=$db->query($qry);
        if($run->num_rows>0){
            while($row=$run->fetch_assoc()){
                $id=$row['notat_id'];
                $klasa=$row['Klasa'];
                $emrinx=$row['EmriNxenesit'];
                $gjuheshqipe=$row['GjuheShqipe'];
                $matematike=$row['Matematike'];
                $gjuheangleze=$row['GjuheAngleze'];
                $shkencanatyrore=$row['ShkNatyrore'];
                $art=$row['Art'];
                $muzike=$row['Muzike'];
                $edfizike=$row['EdFizike'];
                $edqytetare=$row['EdQytetare'];
    ?>
    <tr>
        <td><?php echo $row['EmriNxenesit']?></td>
        <td><?php echo $row['Klasa']?></td>
        <td><?php echo $row['GjuheShqipe']?></td>
        <td><?php echo $row['Matematike']?></td>
        <td><?php echo $row['GjuheAngleze']?></td>
        <td><?php echo $row['ShkNatyrore']?></td>
        <td><?php echo $row['Art']?></td>
        <td><?php echo $row['Muzike']?></td>
        <td><?php echo $row['EdFizike']?></td>
        <td><?php echo $row['EdQytetare']?></td>
        <td id="upd"><a href="mesuesi-edit-nota.php?id=<?php echo $id;?>"><button>UPDATE</button></a></td>
        <td id="del"><a href="mesuesi-delete-nota.php?id=<?php echo $id;?>"><button>DELETE</button></a></td>
    </tr>
    <?php
            }
        }
    ?>
    </table>
    </div>
    
</body>

</html>
<script>
    

</script>
