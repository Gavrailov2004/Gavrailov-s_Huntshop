<?php

include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="products.css">
        <script src="https://kit.fontawesome.com/bb0a559e02.js" crossorigin="anonymous"></script>
    <title>Късо нарезно оръжие</title>
</head>
<body>
    <div class="Hero">
        <nav class="nav1">
         <img src="images/logoweb.png" alt="Website's logo" class="Logo">
          <div class="search">
             <input type="text" placeholder="Какво ще търсите?">
             <a href="#">
               <i class="fa-solid fa-magnifying-glass"></i>
             </a>
          </div>
          <ul>
             <li><a href="http://localhost/Gavrailov's_Huntshop/login.php"><i class="fa-sharp fa-solid fa-person-military-rifle"></i> Моят акаунт</a></li>
             <li><a href="contacts.html"><i class="fa-sharp fa-solid fa-address-card"></i></i> Контакти</a></li>
             <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);?>
             <li><a href="http://localhost/producti/cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i> Количка<span><?php echo $row_count; ?></span></a></li>
          </ul>
         </nav>
         <nav class="nav2">
          <ul id="menu">
           <li class="weapons"><a href="#"><img src="images/guns.png" alt="gun icon" width="70px" height="60px"><br>ОРЪЖИЯ<i class="fa-solid fa-angle-down"></i></a>
               <div class="sub-menu-weapons">
                 <ul>
                   <li class="hover-me-pistols"><a href="http://localhost/Gavrailov's_Huntshop/Pistols.php">КЪСО НАРЕЗНИ ОРЪЖИЯ</a></li>
                   <li class="hover-me-hunting-weapons"><a href="http://localhost/Gavrailov's_Huntshop/huntingRifles.php">ЛОВНИ ОРЪЖИЯ</a></li>
                   <li class="hover-me-sport-weapons"><a href="http://localhost/Gavrailov's_Huntshop/sportGuns.php">СПОРТНИ ОРЪЖИЯ</a></li>
                   <li class="hover-me-gas-weapons"><a href="http://localhost/Gavrailov's_Huntshop/gasWeapons.php">ГАЗОВИ ОРЪЖИЕ</a></li>
                   <li class="hover-me-air-weapons"><a href="http://localhost/Gavrailov's_Huntshop/AirWeapons.php">ВЪЗДУШНИ ОРЪЖИЕ</a></li>
                   <li class="hover-me-primitive-weapons"><a href="http://localhost/Gavrailov's_Huntshop/bowWeapons.php">ЛЪКОВЕ</a></li>
                   <li class="hover-me1"><a href="http://localhost/Gavrailov's_Huntshop/GunAccessories.php">АКСЕСОАРИ ЗА ОРЪЖИЯ</a></li>
                 </ul>
               </div>
           </li>
           <li><a href="#"><img src="images/clothes.png" alt="clothes icon" width="70px" height="60px"><br>ОБЛЕКЛО<i class="fa-solid fa-angle-down"></i></a>
             <div class="sub-menu-clothes">
               <ul>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/T-shirts.php">ТЕНИСКИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/trousers.php">ПАНТАЛОНИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/Shoes.php">ОБУВКИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/shirts.php">РИЗИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/termo-clothes.php">ТЕРМО ОБЛЕКЛА</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/jackets.php">ЯКЕТА</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/polar.php">ПОЛАРИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/socks.php">ЧОРАПИ</a></li>
                 <li><a href="http://localhost/Gavrailov's_Huntshop/tacticalClothes.php">ТАКТИЧЕСКО ОБЛЕКЛО</a></li>
                 <li class="hover-me2"><a href="http://localhost/Gavrailov's_Huntshop/Accessories.php">АКСЕСОАРИ</a></li>
               </ul>
             </div>
           </li>
           <li><a href="#"><img src="images/campfire.png" alt="campfire icon" width="70px" height="60px" class="campfire"><img src="images/tent.png" alt="tent icon" width="70px" height="60px"><br>ТУРИЗЪМ И КЪМПИНГУВАНЕ<i class="fa-solid fa-angle-down"></i></a>
             <div class="sub-menu-camping">
               <ul>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/Lanterns.php">ФЕНЕРЧЕТА</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/Lighters.php">ЗАПАЛКИ И РАЗПАЛКИ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/filters.php">ФИЛТРИ И СЪДОВЕ ЗА ВОДА</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/survivalKits.php">КОМЛЕКТИ ЗА ОЦЕЛЯВАНЕ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/radio.php">РАДИОСТАНЦИИ И GPS АПАРАТИ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/compas.php">КОМПАСИ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/watches.php">ЧАСОВНИЦИ И КОБУРИ</a></li>
                   <li class="hover-me3"><a href="http://localhost/Gavrailov's_Huntshop/campingKits.php">КЪМПИНГ ОБОРУДВАНЕ</a></li>
               </ul>
             </div>
           </li>
           <li><a href="#"><img src="images/taser.png" alt="taser icon" width="70px" height="60px" class="taser"><br>САМОЗАЩИТА<i class="fa-sharp fa-solid fa-angle-down"></i></a>
             <div class="sub-menu-self-defence">
                 <ul>
                   <li class="hover-me"><a href="http://localhost/Gavrailov's_Huntshop/Knifes.php">НОЖОВЕ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/spicySprays.php">ЛЮТИВИ СПРЕЙОВЕ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/tonfi.php">ПАЛКИ И ТОНФИ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/electrical.php">ЕЛЕКТРОШОЦИ</a></li>
                   <li><a href="http://localhost/Gavrailov's_Huntshop/dogsGoner.php">КУЧЕГОНИ</a></li>
             </div>
            </li>
            <li><a href="http://localhost/Gavrailov's_Huntshop/news.php"><img src="images/news.png" alt="binoculars icon" width="70px" height="60px"><br>НОВИНИ</a></li>
            <li><a href="http://localhost/Gavrailov's_Huntshop/weaponCourse.html"><img src="images/target.png" alt="target icon" width="100px" height="60px" class="target"><br>КУРСОВЕ ЗА ОРЪЖИЕ</a></li>
          </ul>
        </nav>
<div class="shoppingPage">
<section class="shopping-cart">
   <h1 class="heading">Количка</h1>
   <table>
      <thead>
         <th>Снимка</th>
         <th>Категория</th>
         <th>Име</th>
         <th>Цена</th>
         <th>Количество</th>
         <th>Тотална цена</th>
         <th>Действие</th>
      </thead>
      <tbody>
         <?php 
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>
         <tr>
            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['category']; ?></td>
            <td><?php echo $fetch_cart['productName']; ?></td>
            <td><?php echo number_format($fetch_cart['price']); ?>лв.</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="нова стойност" name="update_update_btn">
               </form>   
            </td>
            <td><?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>лв.</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Убедени ли сте, че искате да махнете този продукт?')" class="delete-btn"> <i class="fas fa-trash"></i> Махни</a></td>
         </tr>
         <?php
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="http://localhost/producti/Pistols.php" class="option-btn" style="margin-top: 0;">Продължи да пазаруваш</a></td>
            <td colspan="3">Всичко струва</td>
            <td><?php echo $sub_total; ?>лв.</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Убедени ли сте, че искате да махнете всичко?');" class="delete-btn"> <i class="fas fa-trash"></i> Махни всичко </a></td>
         </tr>
      </tbody>
   </table>
   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($sub_total > 1)?'':'disabled'; ?>">Поръчайте</a>
   </div>
  </section>
</div>
</body>
</html>