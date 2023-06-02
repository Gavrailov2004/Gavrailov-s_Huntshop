<?php
include('partials/headerReg.php');
?>
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $family = $_POST["family"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $telnum = $_POST["telnum"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user_form WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      echo "<script> alert('Потребителско име или имейл е зает!'); </script>";
    }
    else if (strlen($_POST["password"])<8) {
        echo "<script> alert('Нужно е паролата да бъде поне 8 символа!'); </script>";
    }
    else if(! preg_match("/[0-9]/",$_POST["password"]))
    {
        echo "<script> alert('Паролата трябва да има поне еднo число!'); </script>";
    }
    else if(! preg_match("/[a-z]/i",$_POST["password"])){
        echo "<script> alert('Паролата трябва да има поне една буква!'); </script>";
    }
    else if (! filter_var($_POST["name"],FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Нужен е истински имейл!'); </script>";
    }
    else{
        $query = "INSERT INTO user_form VALUES('','$username','$password','$name','$family','$age','$email','$telnum')";
        mysqli_query($conn, $query);
        echo "<script> alert('Успешна регистрация!'); </script>";
        header("Location: login.php");
        exit;
    }
  }
?>
    <div class="register_container">
        <div class="overlay">
        </div>
        <div class="titleDiv">
            <h1 class="title">Регистрация</h1>
            <span class="subTitle">Благодаря, че избрахте нас!</span>
        </div>
        <form action="" method="post" novalidate>
            <div class="row grid">
                <div class="row">
                    <label for="username">Потребителско име: </label>
                    <input type="text" id="username" name="username" placeholder="Въведете вашето пот. име" required>
                </div>
                <div class="row">
                    <label for="password"> парола: </label>
                    <input type="password" id="password" name="password" placeholder="Въведете вашата парола" required>
                </div>
                <div class="row">
                    <label for="name">Име: </label>
                    <input type="text" id="name" name="name" placeholder="Въведете вашето име" required>
                </div>
                <div class="row">
                    <label for="family">Фамилия: </label>
                    <input type="text" id="family" name="family" placeholder="Въведете вашата фамилия" required>
                </div>
                <div class="row">
                    <label for="age">Години: </label>
                    <input type="text" id="age" name="age" placeholder="Въведете вашите години" required>
                </div>
                <div class="row">
                    <label for="email">Имейл: </label>
                    <input type="text" id="email" name="email" placeholder="Въведете вашия имейл" required>
                </div>
                <div class="row">
                    <label for="telnum">Телефонен номер: </label>
                    <input type="text" id="telnum" name="telnum" placeholder="Въведете вашия тел. номер" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Регистриране" required>
                    <span class="registerLink">Вече имаш акаунт? <a href="login.php">Влез</a></span>
                </div>
            </div>
        </form>
    </div>
    <?php
include('partials/footer.php');
?>