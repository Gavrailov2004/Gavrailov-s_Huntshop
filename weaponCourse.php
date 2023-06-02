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
    <title>Курс за Оръжие</title>
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
<h1>Курс за безопасно боравене с оръжие</h1>
            
<h2>УЧЕТЕ СЕ ОТ ПРОФЕСИОНАЛИСТИ</h2>


Съгласно наредба N 13 – 575 от март 2011г, всички лица желаещи да получат разрешително за носене на късо нарезно огнестрелно оръжие, трябва имат удостоверение за завършен  курс за безопасно боравене с оръжие.
ВИП Оръжеен и Стрелбищен Комплекс Pro Hunter има удоволствието да Ви предостави възможността да се научите от едни от най- добрите в тази област.
Курсът включва 16 часа теоритична и 16 часа практическа подготовка. Теоретичната част включва лекции от адвокат, чиято цел е  да запознае обучаемия със законовите норми, неговите права и задължения при боравене и носене на огнестрелно оръжие. Лекции от лекар, на тема оказване на първа помощ на лица получили наранявания от огнестрелно оръжие. Квалифициран инструктор ще запознае обучаемите с класификацията на огнестрелните оръжия, правилата за безопасност при работа с огнестрелно оръжие и боеприпаси, правила за поддържане и съхранение на оръжието, видовете боеприпасите за стрелковите оръжия, общи сведения от вътрешната балистика, основни елементи от техниката на стрелба и по- разпространените у нас огнестрелни оръжия.
Практическата част включва индивидуална работа с инструктор на стрелбище. Стрелба с основните класове огнестрелно оръжие в най- популярни калибри, от различни положения и изпълнявайки различи стрелкови упражнения, чиято цел е да научат обучаемия, правилно и по безопасен начин да борави с огнестрелно оръжие.
След преминаване на теоретичната и практическата част се полага изпит пред служба КОС. Денят за изпита е предварително насрочен и обявен. Изпита се състои от две части, тест върху теоретичната част и стрелба с пистолет на 25 метра за практическата. Като до стрелбата се допускат само издържалите теста. Изпитът се провежда на стрелбището на ВИП Оръжеен и Стрелбищен Комплекс Pro Hunter, с адрес бул. Г.М. Димитров 51 - София.

До изпит се допускат само лица преминали теоритичната и практическата част.

              
За записване за изпита за необходими следните документи в оригинал:
1)    Свидетелство за съдимост
2)    Бележка от психо-диспансер
3)    Лична карта
4)    2 бр. паспортни снимки
На личната карта се прави копие, а оригиналите на другите документи се връщат на обучаемия след края на курса.  

Цената на Курса е 250.00 лева без ДДС.

Датите за провеждане на курсове до края на 2023 г. във Варна са:

Януари – 28 и 29

Февруари – 25 и 26

Март – 25 и 26

Април – 29 и 30

Май – 27 и 28

Юни – 24 и 25

Юли – 29 и 30

Август – 26 и 27

Септември – 16 и 17

Октомври – 28 и 29

Ноември – 25 и 26
        </p>
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