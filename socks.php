<?php
include 'config.php';
if(isset($_POST['add_to_cart'])){

$product_category = $_POST['product_category'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = 1;

$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productName = '$product_name'");

if(mysqli_num_rows($select_cart) > 0){
  echo "<script> alert('Вече е добавен продукта!'); </script>";
}else{
   $insert_product = mysqli_query($conn, "INSERT INTO `cart`(category,productName, price, image, quantity) VALUES('$product_category','$product_name', '$product_price', '$product_image', '$product_quantity')");
   echo "<script> alert('Успешно е добавен в количката!'); </script>";
}

}

?>
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
    <title>Чорапите</title>
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
        <div class="pistolsSection">
            <section class="products">
               <h1 class="heading">Всичко за чорапите</h1>
              <div class="box-container">
                  <?php
                  $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Чорапи'");
                  if(mysqli_num_rows($select_products) > 0){
                     while($fetch_product = mysqli_fetch_assoc($select_products)){
                  ?>
                  <form action="" method="post">
                     <div class="box">
                        <img src="images/<?php echo $fetch_product['image']; ?>" alt="">
                        <a href="http://localhost/producti/Pistols.php"><h4><?php echo $fetch_product['category']; ?></h4></a>
                        <h3><?php echo $fetch_product['productName']; ?></h3>
                        <div class="price"><?php echo $fetch_product['price']; ?>лв.</div>
                        <input type="hidden" name="product_category" value="<?php echo $fetch_product['category']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['productName']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="submit" class="btn"  value="Добави в количка" name="add_to_cart">
                     </div>
                  </form>
                  <?php
                     };
                  };
                  ?>
              </div>
            </section>
          </div>

        <footer class="footer">
            <div class="containing">
              <div class="row">
                <div class="footer-col">
                  <h4>КОНТАКТИ</h4>
                  <ul>
                    <li>ТЕЛЕФОН:</li>
                    <li>0899654789 или 0891234567</li>
                    <br>
                    <li>E-MAIL:</li>
                    <li><a href="mailto:blackskull1915@gmail.com">blackskull1915@gmail.com</a></li>
                    <br>
                    <li>РАБОТНО ВРЕМЕ:</li>
                    <li>ПОНЕДЕЛНИК ДО ПЕТЪК ОТ 09:00 ДО 21:00</li>
                    <br>
                    <li><a href="contacts.html">ЗА НАС</a></li>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>ИНФОРМАЦИЯ</h4>
                  <ul>
                    <li><a href="Delivery.html">ДОСТАВКА НА ПОРЪЧКИТЕ</a></li>
                    <br>
                    <li><a href="MethodsForPayment.html">МЕТОДИ НА ПЛАЩАНЕ</a></li>
                    <br>
                    <li><a href="ReturnOrExchange.html">ВРЪЩАНЕ И ЗАМЯНА</a></li>
                    <br>
                    <li><a href="Workshop.html">РАБОТИЛНИЦА</a></li>
                    <br>
                    <li><a href="Providers.html">ПРОИЗВОДИТЕЛИ</a></li>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>ЗА КЛИЕНТА</h4>
                  <ul>
                    <li><a href="TermsAndConditions.html">ОБЩИ УСЛОВИЯ</a></li>
                    <br>
                    <li><a href="Privacy.html">ПОЛИТИКА ЗА ПОВЕРИТЕЛНОСТ</a></li>
                    <br>
                    <li><a href="Useful.html">ПОЛЕЗНО</a></li>
                    <br>
                    <li><a href="DeliveryChecking.html">ПРОВЕРКА НА ПРАТКАТ</a></li>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>МОЯТ АКАУНТ</h4>
                  <ul>
                    <li><a href="ClientInfo.html">ПОТРЕБИТЕЛСКА ИНФОРМАЦИЯ</a></li>
                    <br>
                    <li><a href="Cart.html">КОШНИЦА</a></li>
                    <br>
                    <li><a href="OrderedProducts.html">ПРАТКИ</a></li>
                    <br>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>СЛЕДЕТЕ НИ</h4>
                  <ul>
                    <div class="social-links">
                      <a href="https://www.facebook.com/profile.php?id=100008454886861"><i class="fa-brands fa-square-facebook"></i></a>
                      <a href="https://www.instagram.com/n_gavrailov/"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
</body>
</html>