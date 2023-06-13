<?php
    ob_start();

    $db=mysqli_connect("localhost","root","","lab-1");

    if($db){
        $id=$_GET['id'];
        $qry="SELECT * from notat where notat_id=$id";
        $run=$db->query($qry);

        if($run->num_rows>0){
            while($row=$run->fetch_assoc()){
                $id=$row['notat_id'];
                $emrinx=$row['EmriNxenesit'];
                $gjuheshqipe=$row['GjuheShqipe'];
                $matematike=$row['Matematike'];
                $gjuheangleze=$row['GjuheAngleze'];
                $shkencanatyrore=$row['ShkNatyrore'];
                $art=$row['Art'];
                $muzike=$row['Muzike'];
                $edfizike=$row['EdFizike'];
                $edqytetare=$row['EdQytetare'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESUESI EDIT NOTE</title>
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
            <input type="text" name="emrinx" id="inp1" placeholder="EMRI I NXENESIT..." value="<?php echo $emrinx ?>">
                <div class="nota">
                    <label for="">GJUHE SHQIPE:</label>
                    <input type="text" id="nota" name="gjuheshqipe" value="<?php echo $gjuheshqipe ?>">
                </div>
                <div class="nota">
                    <label for="">MATEMATIKE:</label>
                    <input type=textr" id="nota" name="matematike" value="<?php echo $matematike ?>">
                </div>
                <div class="nota">
                    <label for="">GJUHE ANGLEZE:</label>
                    <input type="text" id="nota" name="gjuheangleze" value="<?php echo $gjuheangleze ?>">
                </div>
                 <div class="nota">
                    <label for="">SHKENCA NATYRORE:</label>
                    <input type="text" id="nota" name="shkencanatyrore" value="<?php echo $shkencanatyrore ?>">
                </div>
                <div class="nota">
                    <label for="">ART:</label>
                    <input type="text" id="nota" name="art" value="<?php echo $art ?>">
                </div>
                <div class="nota">
                    <label for="">MUZIKE:</label>
                    <input type="text" id="nota" name="muzike" value="<?php echo $muzike ?>">
                </div>
                <div class="nota">
                    <label for="">ED FIZIKE:</label>
                    <input type="text" id="nota" name="edfizike" value="<?php echo $edfizike ?>">
                </div>
                <div class="nota">
                    <label for="">ED QYTETARE:</label>
                    <input type="text" id="nota" name="edqytetare" value="<?php echo $edqytetare ?>">
                </div>
                <button id="register" type="update" name="update" value="Update">UPDATE</button>
            </form>
        </div>
    </div>
    
</body>

</html>

<?php
    if(isset($_POST['update'])){
        $emrinx=$_POST['emrinx'];
        $gjuheshqipe=$_POST['gjuheshqipe'];
        $matematike=$_POST['matematike'];
        $gjuheangleze=$_POST['gjuheangleze'];
        $shkencanatyrore=$_POST['shkencanatyrore'];
        $art=$_POST['art'];
        $muzike=$_POST['muzike'];
        $edfizike=$_POST['edfizike'];
        $edqytetare=$_POST['edqytetare'];

        $qry="UPDATE notat set EmriNxenesit='$emrinx',GjuheShqipe='$gjuheshqipe',Matematike='$matematike',GjuheAngleze='$gjuheangleze',ShkNatyrore='$shkencanatyrore',Art='$art',
        Muzike='$muzike',EdFizike='$edfizike',EdQytetare='$edqytetare' where notat_id='$id'";

        if(mysqli_query($db,$qry)){
            header('location:mesuesi-ditari.php');
        }

    }
?>
