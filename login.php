<?php
include('partials/header.php')
?>
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: Logned.php");
}
if(isset($_POST["submit"])){
  $usernameOrEmail = $_POST["usernameOrEmail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user_form WHERE username = '$usernameOrEmail' OR email = '$usernameOrEmail'");
  $adminResult = mysqli_query($conn, "SELECT * FROM user_form WHERE username = 'Gavrailov18' OR email = 'blackskull1915@gmail.com'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($adminResult) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION = [];
      session_unset();
      session_destroy(); 
      header("Location: admin.php");
  }
  else if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: Logned.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
}
?>
    <div class="form_container">
        <div class="overlay">

        </div>
        <div class="titleDiv">
            <h1 class="title">Влез</h1>
            <span class="subTitle">Добре дошли!</span>
        </div>
        <form action="" method="post">
            <div class="row grid">
                <div class="row">
                    <label for="usernameOrEmail">Потребителско име или Имейл: </label>
                    <input type="text" id="usernameOrEmail" name="usernameOrEmail" placeholder="Въведете вашето име" required>
                </div>
                <div class="row">
                    <label for="password"> парола: </label>
                    <input type="password" id="password" name="password" placeholder="Въведете вашата парола" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Влизане" required>
                    <span class="registerLink">Нямаш акаунт? <a href="register.php">Регистрирай се</a></span>
                </div>
            </div>
        </form>
    </div>
    <?php
include('partials/footer.php');
?>