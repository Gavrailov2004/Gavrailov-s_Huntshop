<?php
include 'configAdmin.php';
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
    <title>customers-admin-panel</title>
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
    <aside>
    <?php
   $select = mysqli_query($conn, "SELECT * FROM user_form");
   ?>
        <table border="10px">
            <tr>
            <th>Ид</th>
            <th>Потребитеско име</th>
            <th>Парола</th>
            <th>Име</th>
            <th>Фамилия</th>
            <th>Години</th>
            <th>Имейл</th>
            <th>Номер</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['family']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telnum']; ?></td>
         </tr>
      <?php } ?>
        </table>
    </aside>
</body>
</html>