<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREJTORI</title>
    <link rel="stylesheet" href="drejtori-shto-orar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E/%22%3E">
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
        <div class="titull">SHTO ORAR</div>
        <div class="first">
            <form action="" method="post">
            <input type="text"  id="klase" placeholder="Klasa..." name="klasa">
            <table class="my-table"> 
                <thead>
                  <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="dita">E hene</td>
                    <td id="one"><input type="text" id="one" name="hene1"></td>
                    <td id="two"><input type="text" id="one" name="hene2"></td>
                    <td id="three"><input type="text" id="one" name="hene3"></td>
                    <td id="four"><input type="text" id="one" name="hene4"></td>
                    <td id="five"><input type="text" id="one" name="hene5"></td>
                  </tr>
                  <tr>
                    <td id="dita">E marte</td>
                    <td id="one"><input type="text" id="one" name="marte1"></td>
                    <td id="two"><input type="text" id="one" name="marte2"></td>
                    <td id="three"><input type="text" id="one" name="marte3"></td>
                    <td id="four"><input type="text" id="one" name="marte4"></td>
                    <td id="five"><input type="text" id="one" name="marte5"></td>
                  </tr>
                  <tr>
                    <td id="dita">E merkure</td>
                    <td id="one"><input type="text" id="one" name="merkure1"></td>
                    <td id="two"><input type="text" id="one" name="merkure2"></td>
                    <td id="three"><input type="text" id="one" name="merkure3"></td>
                    <td id="four"><input type="text" id="one" name="merkure4"></td>
                    <td id="five"><input type="text" id="one" name="merkure5"></td>
                  </tr>
                  <tr>
                    <td id="dita">E enjte</td>
                    <td id="one"><input type="text" id="one" name="enjte1"></td>
                    <td id="two"><input type="text" id="one" name="enjte2"></td>
                    <td id="three"><input type="text" id="one" name="enjte3"></td>
                    <td id="four"><input type="text" id="one" name="enjte4"></td>
                    <td id="five"><input type="text" id="one" name="enjte5"></td>
                  </tr>
                  <tr>
                    <td id="dita">E premte</td>
                    <td id="one"><input type="text" id="one" name="premte1"></td>
                    <td id="two"><input type="text" id="one" name="premte2"></td>
                    <td id="three"><input type="text" id="one" name="premte3"></td>
                    <td id="four"><input type="text" id="one" name="premte4"></td>
                    <td id="five"><input type="text" id="one" name="premte5"></td>
                  </tr>
                </tbody>
              </table>              
        </div>
        <button id="shto" style="cursor: pointer;" type="submit" name="submit" value="Submit">Shto orarin</button>
            </form>
    </div>
</body>
</html>

<?php
  if(isset($_POST['submit'])){
    $klasa=$_POST['klasa'];
    $hene1=$_POST['hene1'];
    $hene2=$_POST['hene2'];
    $hene3=$_POST['hene3'];
    $hene4=$_POST['hene4'];
    $hene5=$_POST['hene5'];
    $marte1=$_POST['marte1'];
    $marte2=$_POST['marte2'];
    $marte3=$_POST['marte3'];
    $marte4=$_POST['marte4'];
    $marte5=$_POST['marte5'];
    $merkure1=$_POST['merkure1'];
    $merkure2=$_POST['merkure2'];
    $merkure3=$_POST['merkure3'];
    $merkure4=$_POST['merkure4'];
    $merkure5=$_POST['merkure5'];
    $enjte1=$_POST['enjte1'];
    $enjte2=$_POST['enjte2'];
    $enjte3=$_POST['enjte3'];
    $enjte4=$_POST['enjte4'];
    $enjte5=$_POST['enjte5'];
    $premte1=$_POST['premte1'];
    $premte2=$_POST['premte2'];
    $premte3=$_POST['premte3'];
    $premte4=$_POST['premte4'];
    $premte5=$_POST['premte5'];

    $qry="INSERT into orari values (null,'$klasa','$hene1','$hene2','$hene3','$hene4','$hene5','$marte1','$marte2','$marte3','$marte4','$marte5',
    '$merkure1','$merkure2','$merkure3','$merkure4','$merkure5','$enjte1','$enjte2','$enjte3','$enjte4','$enjte5',
    '$premte1','$premte2','$premte3','$premte4','$premte5')";

if(mysqli_query($db,$qry)){
  echo '<script>alert("U shtua orari!")</script>';
}
  }
?>
