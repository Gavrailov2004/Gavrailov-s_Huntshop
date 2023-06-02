<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user_form WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="homepageart.css">
    <script src="https://kit.fontawesome.com/bb0a559e02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ловен магазин Gavrailov's_Huntshop.eu</title>
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
          <li><a href="logout.php"><i class="fa-sharp fa-solid fa-person-military-rifle">Здравейте </i> <?php echo $row["username"]; ?></a></li>
          <li><a href="contacts.html"><i class="fa-sharp fa-solid fa-address-card"></i></i> Контакти</a></li>
          <li><a href="login.html"><i class="fa-solid fa-star"></i> Запазени</a></li>
          <li><a href="login.html"><i class="fa-solid fa-cart-shopping"></i> Количка</a></li>
       </ul>
      </nav>
     <nav class="nav2">
       <ul id="menu">
        <li class="weapons"><a href="#"><img src="images/guns.png" alt="gun icon" width="70px" height="60px"><br>ОРЪЖИЯ<i class="fa-solid fa-angle-down"></i></a>
            <div class="sub-menu-weapons">
              <ul>
                <li class="hover-me-pistols"><a href="#">КЪСО НАРЕЗНИ ОРЪЖИЯ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-pistols">
                    <ul>
                      <li><a href="#">ПИСТОЛЕТИ</a></li>
                      <li><a href="#">РЕВОЛВЕРИ</a></li>
                      <li><a href="#">ЧАСТИ ЗА КЪСИ НАРЕЗНИ ОРЪЖИЯ</a></li>
                      <li><a href="#">МОНТАЖИ ЗА КЪСИ НАРЕЗНИ ОРЪЖИЯ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me-hunting-weapons"><a href="#">ЛОВНО ОРЪЖИЯ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-hunting-weapons">
                    <ul>
                      <li><a href="#">КАРАБИНИ</a></li>
                      <li><a href="#">ЛОВНИ ПОМПИ</a></li>
                      <li><a href="#">КОМБИНИРАНИ ЛОВНИ ПУШКИ</a></li>
                      <li><a href="#">КЛАСИЧЕСКИ ЛОВНИ ПУШКИ</a></li>
                      <li><a href="#">КОМБИНИРАНИ ЛОВНИ ПУШКИ</a></li>
                      <li><a href="#">ЧАСТИ ЗА ЛОВНИ ПУШКИ</a></li>
                      <li><a href="#">МОНТАЖИ ЗА ЛОВНИ ПУШКИ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me-sport-weapons"><a href="#">СПОРТНО ОРЪЖИЯ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-sport-weapons">
                    <ul>
                      <li><a href="#">СПОРТНИ БОЛТОВИ КАРАБИНИ</a></li>
                      <li><a href="#">СПОРТНИ ПОЛУАВТОМАТИЧНИ КАРАБИНИ</a></li>
                      <li><a href="#">СПОРТНИ ПОМПИ</a></li>
                      <li><a href="#">СПОРТНИ ПОЛУАВТОМАТИ</a></li>
                      <li><a href="#">ПОДОБРЕНИЯ И АКСЕСОАРИ ЗА СПОРТНИ ОРЪЖИЯ</a></li>
                      <li><a href="#">ЧАСТИ ЗА СПОРТНИ ОРЪЖИЯ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me-gas-weapons"><a href="#">ГАЗОВО ОРЪЖИЕ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-gas-weapons">
                    <ul>
                      <li><a href="#">ГАЗОВИ ПИСТОЛЕТИ</a></li>
                      <li><a href="#">ГАЗОВИ РЕВОЛВЕРИ</a></li>
                      <li><a href="#">МУНИЦИИ</a></li>
                      <li><a href="#">СИГНАЛНИ РАКЕТИ</a></li>
                      <li><a href="#">АКСЕСОАРИ ЗА ГАЗОВИ ОРЪЖИЯ</a></li>
                      <li><a href="#">ЧАСТИ ЗА ГАЗОВИ ОРЪЖИЯ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me-air-weapons"><a href="#">ВЪЗДУШНО ОРЪЖИЕ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-air-weapons">
                    <ul>
                      <li><a href="#">ВЪЗДУШНИ ПИСТОЛЕТИ</a></li>
                      <li><a href="#">ВЪЗДУШНИ ПУШКИ</a></li>
                      <li><a href="#">ВЪЗДУШНИ РЕВОЛВЕРИ</a></li>
                      <li><a href="#">МУНИЦИИ</a></li>
                      <li><a href="#">АКСЕСОАРИ ЗА ВЪЗДУШНИ ОРЪЖИЯ</a></li>
                      <li><a href="#">ЧАСТИ ЗА ВЪЗДУШНИ ОРЪЖИЯ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me-primitive-weapons"><a href="#">ЛЪКОВЕ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-primitive-weapons">
                    <ul>
                      <li><a href="#">ЛЪКОВЕ</a></li>
                      <li><a href="#">АРБАЛЕТИ</a></li>
                      <li><a href="#">СТРЕЛИ</a></li>
                      <li><a href="#">АКСЕСОАРИ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me1"><a href="#">АКСЕСОАРИ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-accessories1">
                      <ul>
                        <li><a href="#">КАСИ И СЕЙФОВЕ</a></li>
                        <li><a href="#">СТОЙКИ ЗА ОРЪЖИЕ</a></li>
                        <li><a href="#">РЕМЪЦИ</a></li>
                        <li><a href="#">КАЛЪФИ</a></li>
                        <li><a href="#">ПАТРОНДАШИ И ПАЛАСКИ</a></li>
                        <li><a href="#">МИШЕНИ</a></li>
                        <li><a href="#">АКСЕСОАРИ ЗА ОРЪЖИЕ</a></li>
                      </ul>
                    </div>
                 </li>
              </ul>
            </div>
        </li>
        <li><a href="#"><img src="images/clothes.png" alt="clothes icon" width="70px" height="60px"><br>ОБЛЕКЛО<i class="fa-solid fa-angle-down"></i></a>
          <div class="sub-menu-clothes">
            <ul>
              <li><a href="#">ТЕНИСКИ</a></li>
              <li><a href="#">ПАНТАЛОНИ</a></li>
              <li><a href="#">ОБУВКИ</a></li>
              <li><a href="#">РИЗИ</a></li>
              <li><a href="#">ТЕРМО ОБЛЕКЛА</a></li>
              <li><a href="#">ЯКЕТА</a></li>
              <li><a href="#">ПОЛАРИ</a></li>
              <li><a href="#">ЧОРАПИ</a></li>
              <li><a href="#">ТАКТИЧЕСКО ОБЛЕКЛО</a></li>
              <li class="hover-me2"><a href="#">АКСЕСОАРИ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                <div class="sub-menu-accessories2">
                  <ul>
                    <li><a href="#">КОЛАНИ</a></li>
                    <li><a href="#">ОЧИЛА</a></li>
                    <li><a href="#">РАНИЦИ, ЧАНТИ И КАЛЪФИ</a></li>
                    <li><a href="#">ШАПКИ И ШАЛОВЕ</a></li>
                    <li><a href="#">МАСКИ</a></li>
                    <li><a href="#">НАШИВКИ</a></li>
                    <li><a href="#">РЪКАВИЦИ</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="#"><img src="images/campfire.png" alt="campfire icon" width="70px" height="60px" class="campfire"><img src="images/tent.png" alt="tent icon" width="70px" height="60px"><br>ТУРИЗЪМ И КЪМПИНГУВАНЕ<i class="fa-solid fa-angle-down"></i></a>
          <div class="sub-menu-camping">
            <ul>
                <li><a href="#">ФЕНЕРЧЕТА</a></li>
                <li><a href="#">ЗАПАЛКИ И РАЗПАЛКИ</a></li>
                <li><a href="#">ФИЛТРИ И СЪДОВЕ ЗА ВОДА</a></li>
                <li><a href="#">КОМЛЕКТИ ЗА ОЦЕЛЯВАНЕ</a></li>
                <li><a href="#">РАДИОСТАНЦИИ И GPS АПАРАТИ</a></li>
                <li><a href="#">КОМПАСИ</a></li>
                <li><a href="#">ЧАСОВНИЦИ И КОБУРИ</a></li>
                <li class="hover-me3"><a href="#">КЪМПИНГ ОБОРУДВАНЕ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-campingequipment">
                    <ul>
                      <li><a href="#">КОТЛОНИ</a></li>
                      <li><a href="#">ПРИБОРИ</a></li>
                      <li><a href="#">ЮВЕ ЛАМПИ</a></li>
                      <li><a href="#">МАСИ И СТОЛОВЕ</a></li>
                      <li><a href="#">СПРЕЙОВЕ ПРОТИВ НАСЕКОМИ</a></li>
                      <li><a href="#">ПАЛАТКИ</a></li>
                      <li><a href="#">СПАЛНИ ЧУВАЛИ</a></li>
                    </ul>
                  </div>
                </li>
            </ul>
          </div>
        </li>
        <li><a href="#"><img src="images/taser.png" alt="taser icon" width="70px" height="60px" class="taser"><br>САМОЗАЩИТА<i class="fa-sharp fa-solid fa-angle-down"></i></a>
          <div class="sub-menu-self-defence">
              <ul>
                <li class="hover-me"><a href="#">НОЖОВЕ<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                  <div class="sub-menu-knifes">
                    <ul>
                      <li><a href="#">НОЖОВЕ</a></li>
                      <li><a href="#">СГЪВАЕМИ НОЖОВЕ</a></li>
                      <li><a href="#">ТРЕНИРОВЪЧНИ НОЖОВЕ</a></li>
                      <li><a href="#">САБИ И МЕЧОВЕ</a></li>
                      <li><a href="#">ТОЧИЛА</a></li>
                      <li><a href="#">АКСЕСОАРИ</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">ЛЮТИВИ СПРЕЙОВЕ</a></li>
                <li><a href="#">ПАЛКИ И ТОНФИ</a></li>
                <li><a href="#">ЕЛЕКТРОШОЦИ</a></li>
                <li><a href="#">КУЧЕГОНИ</a></li>
          </div>
         </li>
         <li><a href="#"><img src="images/news.png" alt="binoculars icon" width="70px" height="60px"><br>НОВИНИ</a></li>
         <li><a href="#"><img src="images/target.png" alt="target icon" width="100px" height="60px" class="target"><br>КУРСОВЕ ЗА ОРЪЖИЕ</a></li>
       </ul>
     </nav>
     <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="images/W1.jpg" height="400px" width="1550px">
      </div>
    
      <div class="mySlides fade">
        <img src="images/W2.jpg" height="400px" width="1550px">
      </div>
    
      <div class="mySlides fade">
        <img src="images/W3.jpg" height="400px" width="1550px">
      </div>
      <div class="mySlides fade">
        <img src="images/W4.jpg" height="400px" width="1550px">
      </div>
    
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <section class="Product-Slider">
      <div class="Slider-heading">
        <h3>
          ПРЕДЛОЖЕНИ ЗА ВАС
        </h3>
      </div>
      <div class="Products-sliding">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <button id="prev" class="fas fa-angle-left"></button>
        <button id="next" class="fas fa-angle-right"></button>
      </div>
    </section>
    
    <br>
    <br>
    <br>
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
              <li><a href="Favorite.html">ЖЕЛАНИ ПРОДУКТИ</a></li>
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
  </div>
    <script type="text/javascript">
      const nav = document.querySelector('.nav2');
      var x = document.getElementsByClassName("navigation-manual");
       let navTop = nav.offsetTop;

        function fixedNav() {
        if (window.scrollY >= navTop) {    
        nav.classList.add('fixed');
        } 
        else {
        nav.classList.remove('fixed');    
        }
      }
      window.addEventListener('scroll', fixedNav);
   </script>
<script type="text/javascript">
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script type="text/javascript">
  function responsiveSlider() {
const slider = document.querySelector('.Products-sliding');
let sliderWidth = slider.offsetWidth / 3;
const sliderList = document.querySelector('.Products-sliding ul');
let items = sliderList.querySelectorAll('.Products-sliding li').length -2 ;
let prev = document.getElementById('#prev');
let next = document.getElementById('#next')
let count = 1;

window.addEventListener('resize', function() {
sliderWidth = slider.offsetWidth;
});

function prevSlide() {
if(count > 1) {
count = count - 2;
sliderList.style.left = '-' + count * sliderWidth + 'px';
count++;
}else if(count == 1) {
count = items - 1;
sliderList.style.left = '-' + count * sliderWidth + 'px';
count++;
}

}
function nextSlide() {
if(count < items) {
sliderList.style.left = '-' + count * sliderWidth + 'px';
count++;

}else if(count == items) {
sliderList.style.left = '0px';
count = 1;

}
}
prev.addEventListener('click', prevSlide);
next.addEventListener('click', nextSlide);
setInterval(function() {
nextSlide();
}, 60000);
}

window.onload = function() {
responsiveSlider();
}
</script>
</body>
</html>