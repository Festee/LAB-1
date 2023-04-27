<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREJTORI</title>
    <link rel="stylesheet" href="drejtori-faqjakryesore.css">
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
                <a href="drejtori-njoftimet.php">NJOFTIMET</a>
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
    <div class="djathta">
        <div class="id-input">
            <label>SHF MIHAL GRAMENO</label>
        </div>
        <div class="personale">
            <h1 id="personale1">TË DHËNAT PERSONALE</h1>
            <div class="emri">
                <label>EMRI:</label>
                <input type="text" id="input-emri">
            </div>
            <div class="mbiemri">
                <label>MBIEMRI:</label>
                <input type="text" id="input-mbiemri">
            </div>
            <div class="personal">
                <label>NR.PERSONAL:</label>
                <input type="text" id="input-personal">
            </div>
            <div class="adresa">
                <label>ADRESA:</label>
                <input type="text" id="input-adresa">
            </div>
            <div class="tel">
                <label>NR.TEL:</label>
                <input type="text" id="input-tel">
            </div>
        </div>
        <div class="paga">
            <label>PAGA MOMENTALE</label>
            <input type="text" id="input-paga" >
        </div>
    </div>
</body>
</html>