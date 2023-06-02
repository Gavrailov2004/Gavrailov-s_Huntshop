<?php
include 'configAdmin.php';
$id = $_GET['edit'];
if(isset($_POST['update_news'])){
    $newsHeader = $_POST['newsHeader'];
    $newsText = $_POST['newsText'];
    $newsImage = $_FILES['newsImage']['name'];
    $newsImage_tmp_name = $_FILES['newsImage']['tmp_name'];
    $newsImage_folder = 'news_image/'.$newsImage;
   if(empty($newsText)){
    echo
    "<script> alert('Моля направете поне една промяна!'); </script>";
   }else{
      $update = "UPDATE news SET newsHeader = '$newsHeader', newsText ='$newsText',newsImage = '$newsImage'WHERE id = $id";
      $upload = mysqli_query($conn,$update);
      if($upload){
         move_uploaded_file($newsImage_tmp_name, $newsImage_folder);
         header('location:changeNews.php');
      }else{
        echo
        "<script> alert('Не може да се добави снимката!'); </script>";
      }
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb0a559e02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Update-Products-admin-panel</title>
</head>
<body>
    <header>
        <div class="navigation">
            <i class="fa-solid fa-rectangle-xmark"></i>
            <ul>
            <span class="icon-logo"><img src="images/logoweb.png" alt=""></span><br><span class="title-logo">Gavrailov's Huntshop </span>
                <li><a href="http://localhost/Gavrailov's_Huntshop/admin.php"><span class="icon"><i class="fa-solid fa-house"></i></span><span class="title">Начално меню</span></a></li>
                <li><a href="http://localhost/Gavrailov's_Huntshop/news.php"><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="title">Новини</span></a></li>
                <li><a href="http://localhost/Gavrailov's_Huntshop/orders.php"><span class="icon"><i class="fa-sharp fa-solid fa-basket-shopping"></i></span><span class="title">Поръчки</span></a></li>
                <li><a href="http://localhost/Gavrailov's_Huntshop/products.php"><span class="icon"><i class="fa-solid fa-tags"></i></span><span class="title">Продукти</span></a></li>
                <li><a href="http://localhost/Gavrailov's_Huntshop/customers.php"><span class="icon"><i class="fa-sharp fa-solid fa-user-secret"></i></i></span><span class="title">Потребители</span></a></li>
                <li><a href="settings.html"><span class="icon"><i class="fa-solid fa-toolbox"></i></span><span class="title">Настройки</span></a></li>
                <li><a href="http://localhost/Gavrailov's_Huntshop/login.php"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="title">Излез</span></a></li>
            </ul>
        </div>
    </header>
    <aside class="productPage">
<div class="admin-product-form-container">
<?php
      
      $select = mysqli_query($conn, "SELECT * FROM news WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Промени Новината</h3>
         <input type="text" placeholder="Въведи заглавието на новината" name="newsHeader" class="box">
         <textarea name="newsText" id="" cols="30" rows="10" class="box" placeholder="Въведи текста за новината"></textarea>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="newsImage" class="box">
         <input type="submit" class="btn" name="update_news" value="Промени!">
         <a href="http://localhost/AdminPanel/changeNews.php" class="btnhr">Върни се!</a>
   </form>
      </div>
      <?php }; ?>
    </aside>
</body>
</html>