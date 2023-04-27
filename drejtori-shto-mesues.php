<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHTO MESUES</title>
    <link rel="stylesheet" href="drejtori-shto-mesues.css">
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
    <div class="djathtas">
        <h1>SHTO MESUESIN</h1>
        <div class="container">
            <div class="left">
                <input type="text" id="input1" placeholder="ID...">
                <input type="text" id="input2" placeholder="Emri...">
                <input type="text" id="input3" placeholder="Mbiemri...">
                <input type="text" id="input4" placeholder="Email...">
                <input type="text" id="input5" placeholder="Nr.tel...">
            </div>

            <div class="right">
                <input type="text" id="input6" placeholder="Gjinia...">
                <input type="text" id="input7" placeholder="Data e lindjes...">
                <input type="text" id="input8" placeholder="Adresa...">
                <input type="text" id="input9" placeholder="Login email...">
                <input type="text" id="input10" placeholder="Login password...">
            </div>

            <div class="klasa-zgjedh">
                <h3 class="klasa">Zgjedh nje klase:</h3>
                <select id="klasa-dropdown">
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
        <button id="regjistro">REGJISTRO</button>
    </div>
</body>

</html>