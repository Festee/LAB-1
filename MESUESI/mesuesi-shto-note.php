<?php
    session_start();
    $db=mysqli_connect("localhost","root","","lab-1");

    $mesuesi_id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';

    $sql="SELECT Klasa from mesuesit where ID='$mesuesi_id' ";
    $result=$db->query($sql);

   

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
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
    <title>MESUESI SHTO NOTA</title>
    <link rel="stylesheet" href="mesuesi-shto-note.css">
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
    <div class="njoftimet">
                <a href="#"><?php echo $klasa?></a>
            </div>
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
    <h1 id="njoftimi">SHTO NOTA</h1>
        <div class="box">
            
            <form action="" id="forma" method="post">
            <input type="text" name="emrinx" id="inp1" placeholder="EMRI I NXENESIT...">
            <div class="nota">
                    <label for="">KLASA:</label>
                    <select name="klasa" id="klasa">
                        <option value="I/1">I/1</option>
                        <option value="I/2">I/2</option>
                        <option value="II/1">II/1</option>
                        <option value="II/2">II/2</option>
                        <option value="III/1">III/1</option>
                        <option value="III/2">III/2</option>
                        <option value="IV/1">IV/1</option>
                        <option value="IV/2">IV/2</option>
                        <option value="V/1">V/1</option>
                        <option value="V/2">V/2</option>
                    </select>
                    
                </div>
                <div class="nota">
                    <label for="">GJUHE SHQIPE:</label>
                    <input type="text" id="nota" name="gjuheshqipe">
                </div>
                <div class="nota">
                    <label for="">MATEMATIKE:</label>
                    <input type=textr" id="nota" name="matematike">
                </div>
                <div class="nota">
                    <label for="">GJUHE ANGLEZE:</label>
                    <input type="text" id="nota" name="gjuheangleze">
                </div>
                 <div class="nota">
                    <label for="">SHKENCA NATYRORE:</label>
                    <input type="text" id="nota" name="shkencanatyrore">
                </div>
                <div class="nota">
                    <label for="">ART:</label>
                    <input type="text" id="nota" name="art">
                </div>
                <div class="nota">
                    <label for="">MUZIKE:</label>
                    <input type="text" id="nota" name="muzike">
                </div>
                <div class="nota">
                    <label for="">ED FIZIKE:</label>
                    <input type="text" id="nota" name="edfizike">
                </div>
                <div class="nota">
                    <label for="">ED QYTETARE:</label>
                    <input type="text" id="nota" name="edqytetare">
                </div>
                
                <button id="register" type="submit" name="submit" value="Submit">SHTO NOTAT</button>
            </form>
        </div>
    </div>
    
</body>

</html>

<?php

    if(isset($_POST['submit'])){
        $klasa=$_POST['klasa'];
        $emrinx=$_POST['emrinx'];
        $gjuheshqipe=$_POST['gjuheshqipe'];
        $matematike=$_POST['matematike'];
        $gjuheangleze=$_POST['gjuheangleze'];
        $shkencanatyrore=$_POST['shkencanatyrore'];
        $art=$_POST['art'];
        $muzike=$_POST['muzike'];
        $edfizike=$_POST['edfizike'];
        $edqytetare=$_POST['edqytetare'];

        $qry="INSERT into notat values(null,'$klasa','$emrinx','$gjuheshqipe','$matematike','$gjuheangleze','$shkencanatyrore','$art','$muzike','$edfizike','$edqytetare')";

        if(mysqli_query($db,$qry)){
            echo '<script>alert("U shtuan notat")</script>';
        }
    }
?>
