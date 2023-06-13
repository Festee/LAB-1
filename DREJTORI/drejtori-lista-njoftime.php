<?php
    $db=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREJTORI LISTA E NJOFTIMEVE</title>
    <link rel="stylesheet" href="drejtori-lista-njoftime.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <button id="back"><a href="drejtori-faqjakryesore.php"><i class="fa-solid fa-backward"></i></a></button>
    <div class="djathtas">
        <h1 id="lista">Lista e njoftimeve</h1>
        <div class="search-bar">
            <input type="text" id="search" placeholder="search here...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="lista">
        <table>
          <?php
              $qry="SELECT * from njoftimet";
              $run=$db->query($qry);
              if($run -> num_rows > 0){
                while($row = $run ->fetch_assoc()){
                  $id=$row['ID'];
                  $njoftim=$row['Njoftimi'];
              ?>
            <tr>
              <td><?php echo $row['Njoftimi'] ?></td>
              
              <td>
              <a href="drejtori-edit-njoftimet.php?id=<?php echo $id?>"><button id="update-btn"><i class="fa-solid fa-arrows-rotate"></i></button></a>
            </td>
            <td>
              <a href="delete-njoftimi.php?id=<?php echo $id;?>"><button id="delete-btn"><i class="fa-solid fa-trash" onclick="return confirm('A jeni i sigurte?')"></i></button></a>          </td>
            </tr>
            <?php
                }
              }
            ?>
            

</table>

        </div>
    </div>
    <script>
        document.getElementById("search").addEventListener("input", function () {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</body>
</html>
