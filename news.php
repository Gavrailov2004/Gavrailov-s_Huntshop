<?php
include 'configAdmin.php';

if(isset($_POST['add_news'])){
   $newsHeader = $_POST['newsHeader'];
   $newsText = $_POST['newsText'];
   $newsImage = $_FILES['newsImage']['name'];
   $newsImage_tmp_name = $_FILES['newsImage']['tmp_name'];
   $newsImage_folder = 'news_image/'.$newsImage;

   if(empty($newsHeader) || empty($newsText) || empty($newsImage)){
      echo "<script> alert('Попълнете всичко'); </script>";
   }else{
      $insert = "INSERT INTO news(newsHeader,newsText,newsImage) VALUES('$newsHeader','$newsText','$newsImage')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($newsImage_tmp_name, $newsImage_folder);
         echo
      "<script> alert('Успешно добавяне на продукта'); </script>";
      }else{
        echo
        "<script> alert('Не може да се добави продукта'); </script>";
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
    <title>News-admin-panel</title>
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
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Добави новина</h3>
         <input type="text" placeholder="Въведи заглавието на новината" name="newsHeader" class="box">
         <textarea name="newsText" id="" cols="30" rows="10" class="box" placeholder="Въведи текста за новината"></textarea>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="newsImage" class="box">
         <input type="submit" class="btn" name="add_news" value="Добави новина">
      </form>
      </div>
      <?php
   $select = mysqli_query($conn, "SELECT * FROM news");
   ?>
    <div class="product-display">
      <table class="product-display-table">
        <th>
         <tr>
            <th>Снимка</th>
            <th>Ид</th>
            <th>Заглавие</th>
            <th>Текст</th>
         </tr>
        </th>
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="news_image/<?php echo $row['newsImage']; ?>" height="100" alt=""></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['newsHeader']; ?></td>
            <td><?php echo $row['newsText']; ?></td>
         </tr>
      <?php } ?>
      </table>
   </div>
    </aside>
</body>
</html>