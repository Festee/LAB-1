<?php
    $db=mysqli_connect("localhost","root","","lab-1");

    if($db){
        $id=$_GET['id'];
        $qry="SELECT * from nxenesit where ID=$id";
        $run=$db->query($qry);
        if($run->num_rows>0){
            while($row = $run -> fetch_assoc()){
                $id=$row['ID'];
                $nxenesi_id=$row['NxenesiID'];
                $emri=$row['Emri'];
                $mbiemri=$row['Mbiemri'];
                $prindi=$row['EmriPrindit'];
                $telefoni=$row['NrTel'];
                $gjinia=$row['Gjinia'];
                $datelindja=$row['Datelindja'];
                $adresa=$row['Adresa'];
                $login_email=$row['LoginEmail'];
                $login_password=$row['LoginPassword'];
                $klasa=$row['Klasa'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHTO NXENES</title>
    <link rel="stylesheet" href="drejtori-shto-nxenes.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="majta">
      <h1>DREJTORI</h1>
      <div class="nxenesi">
        <i id="user-icon" class="fa-solid fa-crown fa-2xl"></i>
        <br />
        <h2 id="emri">
          <a href="drejtori-faqjakryesore.php">Festim Zylfiu</a>
        </h2>
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
     <form action="" method="post" id="forma">
     <h1>SHTO NXENESIN</h1>
      <div class="container">
        <div class="left">
          <input type="text" value="<?php echo $nxenesi_id?>"  id="input1" placeholder="ID..." name="nxenesi_id"/>
          <input type="text" value="<?php echo $emri?>"  id="input2" placeholder="Emri..." name="emri"/>
          <input type="text" value="<?php echo $mbiemri?>"  id="input3" placeholder="Mbiemri..." name="mbiemri"/>
          <input type="text" value="<?php echo $prindi?>"  id="input4" placeholder="Emri i prindit..." name="prindi"/>
          <input type="text" value="<?php echo $telefoni?>"  id="input5" placeholder="Nr.tel..." name="telefoni"/>
        </div>

        <div class="right">
          <input type="text" value="<?php echo $gjinia?>"  id="input6" placeholder="Gjinia..." name="gjinia"/>
          <input type="text" value="<?php echo $datelindja?>"  id="input7" placeholder="Data e lindjes..." name="datelindja"/>
          <input type="text" value="<?php echo $adresa?>"  id="input8" placeholder="Adresa..." name="adresa" />
          <input type="text" value="<?php echo $login_email?>"  id="input9" placeholder="Login email..." name="login_email"/>
          <input type="text" value="<?php echo $login_password?>"  id="input10" placeholder="Login password..." name="login_password"/>
        </div>
        <div class="klasa-zgjedh">
          <h3 class="klasa">Zgjedh nje klase:</h3>
          <select id="klasa-dropdown" name="klasa"value="<?php echo $klasa?>"  >
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
      </div>
      <button id="regjistro" type="update" name="update" value="Update">REGJISTRO</button>
      </form>
    </div>
  </body>
</html>

<?php
    if(isset($_POST['update'])){
        $nxenesi_id=$_POST['nxenesi_id'];
        $emri=$_POST['emri'];
        $mbiemri=$_POST['mbiemri'];
        $prindi=$_POST['prindi'];
        $telefoni=$_POST['telefoni'];
        $gjinia=$_POST['gjinia'];
        $datelindja=$_POST['datelindja'];
        $adresa=$_POST['adresa'];
        $login_email=$_POST['login_email'];
        $login_password=$_POST['login_password'];
        $klasa=$_POST['klasa'];

        $qry="UPDATE nxenesit SET NxenesiID='$nxenesi_id',Emri='$emri',Mbiemri='$mbiemri',
        EmriPrindit='$prindi',NrTel='$telefoni',Gjinia='$gjinia',Datelindja='$datelindja',
        Adresa='$adresa',LoginEmail='$login_email',LoginPassword='$login_password',Klasa='$klasa'";

        if(mysqli_query($db,$qry)){
            echo '<script>alert("U ndryshu nxenesi!")</script>';
        }
}
?>
