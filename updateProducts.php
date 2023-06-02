<?php
include 'configAdmin.php';
$id = $_GET['edit'];
if(isset($_POST['update_product'])){
   $product_category = $_POST['product_category'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'images/'.$product_image;

   if(empty($product_name)){
    echo
    "<script> alert('Моля направете поне една промяна!'); </script>";
   }else{
      $update = "UPDATE products SET category = '$product_category', productName ='$product_name', price = '$product_price', image = '$product_image'
      WHERE id = $id";
      $upload = mysqli_query($conn,$update);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:changeProducts.php');
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
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Промени продукта</h3>
         <input type="text"   placeholder="Въведи категорията на продукта" name="product_category" class="box">
         <input type="text"  placeholder="Въведи името на продукта" name="product_name" class="box">
         <input type="number" placeholder="въведи цената на продукта" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="update_product" value="Промени!">
         <a href="http://localhost/AdminPanel/changeProducts.php" class="btnhr">Върни се!</a>
   </form>
      </div>
      <?php }; ?>
    </aside>
</body>
</html>