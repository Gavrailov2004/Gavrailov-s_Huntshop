<?php
include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $addres = $_POST['addres'];
   $city = $_POST['city'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['productName'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, telnum, email, deliveryAddres, town, paymentMethod, total_products, total_price) VALUES('$name','$number','$email','$addres','$city','$method','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> струва : ".$price_total."лв  </span>
         </div>
         <div class='customer-details'>
            <p> Вашето име : <span>".$name."</span> </p>
            <p> Вашия номер : <span>".$number."</span> </p>
            <p> Вашия имейл : <span>".$email."</span> </p>
            <p> Вашия адрес : <span>".$addres.", ".$city."</span> </p>
            <p> Вие избрахте да плащате с : <span>".$method."</span> </p>
            <p>(*Очаквайте обаждане от нас*)</p>
         </div>
            <a href='Pistol.php' class='btn'>Продължете с пазаруването</a>
         </div>
      </div>
      ";
   }
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
<div class="container">
<section class="checkout-form">
   <h1 class="heading">Завършете поръчката</h1>
   <form action="" method="post">
   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['productName']; ?> Количество(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'> echo <script> alert('Количката е празна'); </script>;</div>";
      }
      ?>
      <span class="grand-total"> Всичко е : <?= $grand_total; ?>лв.</span>
   </div>
      <div class="flex">
         <div class="inputBox">
            <span>Вашето име</span>
            <input type="text" placeholder="въведи вашето име" name="name" required>
         </div>
         <div class="inputBox">
            <span>Вашия телефонен номер </span>
            <input type="text" placeholder="въведете вашия номер" name="number" required>
         </div>
         <div class="inputBox">
            <span>Вашия имейл</span>
            <input type="email" placeholder="Въведете вашия имейл" name="email" required>
         </div>
         <div class="inputBox">
            <span>Адрес на доставката</span>
            <input type="text" placeholder="Въведете вашия адрес на доставката" name="addres" required>
         </div>
         <div class="inputBox">
            <span>Град</span>
            <input type="text" placeholder="Въведете градът на доставка" name="city" required>
         </div>
         <div class="inputBox">
            <span>Метод за заплащане</span>
            <select name="method">
               <option value="cash on delivery" selected>Наложен платеж</option>
               <option value="credit cart">Кредитна карта</option>
               <option value="paypal">Paypal</option>
            </select>
         </div>
      </div>
      <input type="submit" value="Поръчайте сега!" name="order_btn" class="btn">
   </form>
</section>
</div>
</body>
</html>