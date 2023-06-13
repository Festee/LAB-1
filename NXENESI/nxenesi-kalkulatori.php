<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NXENESI KALKULATORI</title>
    <link rel="stylesheet" href="kalkulatori.css">
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
    <div class="calc">
        <input type="text" name="rez" id="rez" placeholder="REZULTATI">
        <div class="butonat">
            <button id="nje">1</button>
            <button id="dy">2</button>
            <button id="tre">3</button>
            <button id="AC">AC</button>
            <button id="kater">4</button>
            <button id="pese">5</button>
            <button id="gjashte">6</button>
            <button id="here">*</button>
            <button id="shtate">7</button>
            <button id="tete">8</button>
            <button id="nente">9</button>
            <button id="pjestim">/</button>
            <button id="zero">0</button>
            <button id="plus">+</button>
            <button id="minus">-</button>
            <button id="baraz">=</button>
        </div>
    </div>
    <script>
        const input=document.getElementById("rez")
        const btn1=document.getElementById("nje")
        const btn2=document.getElementById("dy")
        const btn3=document.getElementById("tre")
        const btn4=document.getElementById("kater")
        const btn5=document.getElementById("pese")
        const btn6=document.getElementById("gjashte")
        const btn7=document.getElementById("shtate")
        const btn8=document.getElementById("tete")
        const btn9=document.getElementById("nente")
        const btnplus=document.getElementById("plus")
        const btnminus=document.getElementById("minus")
        const btnhere=document.getElementById("here")
        const btnpjestim=document.getElementById("pjestim")
        const btnbaraz=document.getElementById("baraz")
        const btnac=document.getElementById("AC")
        const btnzero=document.getElementById("zero")


        btn1.addEventListener("click", function() {
             input.value += "1";
        });
        btn2.addEventListener("click", function() {
             input.value += "2";
        });
        btn3.addEventListener("click", function() {
             input.value += "3";
        });
        btn4.addEventListener("click", function() {
             input.value += "4";
        });
        btn5.addEventListener("click", function() {
             input.value += "5";
        });
        btn6.addEventListener("click", function() {
             input.value += "6";
        });
        btn7.addEventListener("click", function() {
             input.value += "7";
        });
        btn8.addEventListener("click", function() {
             input.value += "8";
        });
        btn9.addEventListener("click", function() {
             input.value += "9";
        });
        btnzero.addEventListener("click",function(){
            input.value+="0"
        })
        btnplus.addEventListener("click", function() {
             input.value += "+";
        });
        btnminus.addEventListener("click", function() {
             input.value += "-";
        });
        btnhere.addEventListener("click", function() {
             input.value += "*";
        });
        btnpjestim.addEventListener("click", function() {
             input.value += "/";
        });
        btnac.addEventListener("click", function() {
             input.value = '';
        });
        btnbaraz.addEventListener("click", function() {
             input.value = eval(input.value);
        });
    </script>
</body>
</html>
