<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nxenesit</title>
    <link rel="stylesheet" href="drejtori-lista-nxenes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <button id="back"><a href="drejtori-faqjakryesore.php"><i class="fa-solid fa-backward"></i></a></button>
    <div class="djathtas">
        <h1 id="lista">Lista e nxenesve</h1>
        <div class="search-bar">
            <input type="text" id="search" placeholder="search here...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="lista">
            <?php
                $qry="SELECT * from nxenesit";
                $run=$db->query($qry);
                if($run -> num_rows>0){
                    while($row=$run->fetch_assoc()){
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
            ?>
            <table id="mesues">
                <tr>
                  <td>ID:</td>
                  <td style="color: red; text-decoration:underline;"><?php echo $row['NxenesiID']?></td>
                </tr>
                <tr>
                    <td>EMRI:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Emri']?></td>
                </tr>
                <tr>
                    <td>MBIEMRI:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Mbiemri']?></td>
                </tr>
                <tr>
                    <td>EMRI I PRINDIT:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['EmriPrindit']?></td>
                </tr>
                <tr>
                    <td>NR.TEL:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['NrTel']?></td>
                </tr>
                <tr>
                    <td>GJINIA:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Gjinia']?></td>
                </tr>
                <tr>
                    <td>DATELINDJA:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Datelindja']?></td>
                </tr>
                <tr>
                    <td>ADRESA:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Adresa']?></td>
                </tr>
                <tr>
                    <td>LOGIN EMAIL:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['LoginEmail']?></td>
                </tr>
                <tr>
                    <td>LOGIN PASS:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['LoginPassword']?></td>
                </tr>
                <tr>
                    <td>KLASA:</td>
                    <td style="color: red; text-decoration:underline;"><?php echo $row['Klasa']?></td>
                </tr>
                <tr>
                    <td><a href="drejtori-edit-nxenesi.php?id=<?php echo $id;?>"><button id="update-btn"><i class="fa-solid fa-arrows-rotate"></i></button></a></td>
                    <td><a href="delete-nxenesi.php?id=<?php echo $id;?>"><button id="delete-btn"><i class="fa-solid fa-trash"></i></button></a></td>
                </tr>
                <?php
                         }
                        }
                ?>
              </table>
        </div>
    </div>
</body>
</html>
