<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="drejtori-lista-orare.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E/%22%3E">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <button><a href="drejtori-faqjakryesore.php"><i class="fa-solid fa-backward"></i></a></button>
    <div class="oraret" style="margin-top: 10px;">
    <?php
          $qry="SELECT * FROM orari";
          $run=$db->query($qry);
          if($run -> num_rows>0){
            while($row=$run->fetch_assoc()){
              $id=$row['ID'];
              $klasa=$row['Klasa'];
              $hene1=$row['Hene1'];
              $hene2=$row['Hene2'];
              $hene3=$row['Hene3'];
              $hene4=$row['Hene4'];
              $hene5=$row['Hene5'];
              $marte1=$row['Marte1'];
              $marte2=$row['Marte2'];
              $marte3=$row['Marte3'];
              $marte4=$row['Marte4'];
              $marte5=$row['Marte5'];
              $merkure1=$row['Merkure1'];
              $merkure2=$row['Merkure2'];
              $merkure3=$row['Merkure3'];
              $merkure4=$row['Merkure4'];
              $merkure5=$row['Merkure5'];
              $enjte1=$row['Enjte1'];
              $enjte2=$row['Enjte2'];
              $enjte3=$row['Enjte3'];
              $enjte4=$row['Enjte4'];
              $enjte5=$row['Enjte5'];
              $premte1=$row['Premte1'];
              $premte2=$row['Premte2'];
              $premte3=$row['Premte3'];
              $premte4=$row['Premte4'];
             $premte5=$row['Premte5'];
        ?>  
    <div class="first">
        
        <p style="margin: 0 auto; margin-top:10px; color:red; text-decoration:underline"><?php echo $row['Klasa']?></p>
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
                <td id="one"><?php echo $row['Hene1']?></td>
                <td id="two"><?php echo $row['Hene2']?></td>
                <td id="three"><?php echo $row['Hene3']?></td>
                <td id="four"><?php echo $row['Hene4']?></td>
                <td id="five"><?php echo $row['Hene5']?></td>
              </tr>
              <tr>
                <td id="dita">E marte</td>
                <td id="one"><?php echo $row['Marte1']?></td>
                <td id="two"><?php echo $row['Marte2']?></td>
                <td id="three"><?php echo $row['Marte3']?></td>
                <td id="four"><?php echo $row['Marte4']?></td>
                <td id="five"><?php echo $row['Marte5']?></td>
              </tr>
              <tr>
                <td id="dita">E merkure</td>
                <td id="one"><?php echo $row['Merkure1']?></td>
                <td id="two"><?php echo $row['Merkure2']?></td>
                <td id="three"><?php echo $row['Merkure3']?></td>
                <td id="four"><?php echo $row['Merkure4']?></td>
                <td id="five"><?php echo $row['Merkure5']?></td>
              </tr>
              <tr>
                <td id="dita">E enjte</td>
                <td id="one"><?php echo $row['Enjte1']?></td>
                <td id="two"><?php echo $row['Enjte2']?></td>
                <td id="three"><?php echo $row['Enjte3']?></td>
                <td id="four"><?php echo $row['Enjte4']?></td>
                <td id="five"><?php echo $row['Enjte5']?></td>
              </tr>
              <tr>
                <td id="dita">E premte</td>
                <td id="one"><?php echo $row['Premte1']?></td>
                <td id="two"><?php echo $row['Premte2']?></td>
                <td id="three"><?php echo $row['Premte3']?></td>
                <td id="four"><?php echo $row['Premte4']?></td>
                <td id="five"><?php echo $row['Premte5']?></td>
              </tr>
            </tbody>
            
          </table>     
          <div class="butonat">
            <td><a href="drejtori-edit-orari.php?id=<?php echo $id;?>"><button id="update-btn"><i class="fa-solid fa-arrows-rotate"></i></button></a></td>
            <td><a href="delete-orari.php?id=<?php echo $id;?>"><button id="delete-btn"><i class="fa-solid fa-trash"></i></button></a></td>   
          </div>    
        
    </div>          
    <?php
             }
            }
            ?> 
</div>
</body>
</html>
