<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NXENESI NJOFTIMET</title>
    <link rel="stylesheet" href="njoftimet.css">
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
    <div class="notifications">
        <div class="njoftime">NJOFTIMET</div>
        <div class="new-njoftimet">
            <?php
            $qry="SELECT * from njoftimet";
            $run=$db->query($qry);
            if($run->num_rows>0){
                while($row=$run->fetch_assoc()){
                    $id=$row['ID'];
                    $njoftimi=$row['Njoftimi'];
               
            ?>
            
            <div class="njoftimi"><i class="fa-solid fa-message fa-2xl"></i><p><?php echo $row['Njoftimi']?></p></div>  
       <?php 
       }
            }
            ?>
        </div>
    </div>
    <script>
        let divs = document.querySelectorAll(".new-njoftimet .njoftimi");
        let numDivs = divs.length;
    
        let interval = setInterval(function() {
            if (numDivs > 0) {
                divs[numDivs-1].remove();
                numDivs--;
            } else {
                clearInterval(interval);
            }
        }, 1000000);
    </script>
</body>
</html>
