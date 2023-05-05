<?php
    $db=mysqli_connect("localhost","root","","lab-1");


    if($db){
    $id=$_GET['id'];
        $qry="SELECT * from njoftimet where ID=$id";
        $run=$db->query($qry);
        if($run -> num_rows > 0){
          while($row = $run ->fetch_assoc()){
                $njoftimi=$row['Njoftimi'];
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
    <title>SHTO MESUES</title>
    <link rel="stylesheet" href="drejtori-njoftimet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="majta">
        <h1>DREJTORI</h1>
        <div class="nxenesi">
            <i id="user-icon" class="fa-solid fa-crown fa-2xl"></i>
            <br>
            <h2 id="emri"><a href="drejtori-faqjakryesore.php">Festim Zylfiu</a></h2>
        </div>
        <div class="opsionet">
            <div class="mesuesit">
                <i class="fa-solid fa-graduation-cap"></i>
                <div class="dropdown">
                    <button class="dropbtn">MESUESIT</button>
                    <div class="dropdown-content">
                        <a href="drejtori-lista-mesues.php">LISTA</a>

                        <a href="drejtori-shto-mesues.php" id="shto-msus">SHTO MESUES</a>
                    </div>
                </div>
            </div>
            <div class="nxenesit">
                <i class="fa-solid fa-users"></i>
                <div class="dropdown">
                    <button class="dropbtn">NXENESIT</button>
                    <div class="dropdown-content">
                        <a href="drejtori-lista-nxenes.php">LISTA</a>
                        <a href="drejtori-shto-nxenes.php">SHTO NXENES</a>

                    </div>
                </div>
            </div>
            <div class="kalendari">
                <i class="fa-regular fa-calendar-days"></i>
                <a href="drejtori-kalendari.php">KALENDARI </a>
            </div>
            <div class="njoftimet">
                <i class="fa-solid fa-bell"></i>
                <div class="dropdown">
                    <button class="dropbtn">NJOFTIMET</button>
                    <div class="dropdown-content">
                        <a href="drejtori-lista-njoftimet.php">LISTA</a>
                        <a href="drejtori-njoftimet.php">SHTO NJOFTIM</a>
                    </div>
                </div>
            </div>
            <div class="oraret">
                <i class="fa-sharp fa-solid fa-clock"></i>
                <div class="dropdown">
                    <button class="dropbtn">ORARET</button>
                    <div class="dropdown-content">
                        <a href="drejtori-lista-orare.php">LISTA</a>
                        <a href="drejtori-shto-orar.php">SHTO ORAR</a>
                    </div>
                </div>
            </div>
        </div>
        <button id="logout"><a href="#">LOGOUT</a></button>
    </div>
    <div class="djathtas">
    <h1 id="njoftimi">Shto njoftimin e rradhes:</h1>
    <form action="" method="post" id="forma">
      <div class="njoftimi-input">
        <input type="text" value="<?php echo $njoftimi; ?>" name="njoftimi">
        <button id="plusi" type="update" name="update" value="Update"><i class="fa-solid fa-plus"></i></button>
      </div>
    </form>
    </div>
    
</body>

</html>

<?php
    if(isset($_POST['update'])){
        $njoftimi=$_POST['njoftimi'];

        $qry="UPDATE njoftimet set Njoftimi = '$njoftimi' where ID='$id' ";

        if(mysqli_query($db,$qry)){
            header('location:drejtori-lista-njoftimet.php');
        }
    }

?>
