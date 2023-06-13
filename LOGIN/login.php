<?php
    session_start();
    $db=mysqli_connect("localhost","root","","lab-1");
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

$sql = "SELECT * FROM drejtori WHERE LoginEmail='$email' AND LoginPassword='$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['ID'] = 'drejtori';
    header("location:../DREJTORI/drejtori-faqjakryesore.php");
    exit(); 
}

$sql = "SELECT * FROM mesuesit WHERE LoginEmail='$email' AND LoginPassword='$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['ID'] = $row['ID']; 
    $_SESSION['Klasa'] = $row['Klasa'];
    header("location:../MESUESI/mesuesi-faqjakryesore.php");
    exit(); 
}

$sql = "SELECT * FROM nxenesit WHERE LoginEmail='$email' AND LoginPassword='$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['Emri'] = $row['Emri'];
    $_SESSION['Mbiemri'] = $row['Mbiemri'];
    $_SESSION['Klasa'] = $row['Klasa'];
    header("location:../NXENESI/nxenesi-faqjakryesore.php");
    exit(); 
}

if (empty($email) || empty($password)) {
    echo "<script>alert('Ju lutem jepni te dhenat...');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function fadeimage(){
            var input = document.getElementById("email");
            var foto=document.getElementById("login-img");
            var opacity=1-(input.value.length/30);
            foto.style.opacity=opacity;
        }
        function fadeImage(){
            var input = document.getElementById("password");
            var foto=document.getElementById("password-img");
            var opacity=1-(input.value.length/30);
            foto.style.opacity=opacity;
        }
    </script>
</head>
<body>
    <form action="" method="post">
    <div class="container">
        <h2 id="user-login">USER LOGIN</h2>
        <br><br>
        <div class="email-input">
            <i class="fa-solid fa-user fa-xl" id="login-img"></i>
            <input type="text" id="email" name="email" placeholder="EMAIL" onkeyup="fadeimage()">
        </div>
        <br>
        <div class="password-input">
            <input type="password" id="password" name="password" placeholder="PASSWORD" onkeyup="fadeImage()">
            <i class="fa-solid fa-lock fa-xl" id="password-img"></i>
        </div>
        <br><br>
        <button type="submit" id="login-btn" ><a href="">LOGIN</a></button>
    </div>
    </form>
</body>
</html>
<?php


?>
