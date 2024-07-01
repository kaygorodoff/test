<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>СТО Барнаул</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  
  <script src="https://kit.fontawesome.com/e7e1f95aba.js" crossorigin="anonymous"></script>
  <script src="java.js" defer></script>
  <link rel="icon" href="pic/icon.png">
</head>
<body class="background">
<div class="content">
<img class="banner" src="pic/banner.png">
<h2>Поиск услуги</h2>
<form class="poisk" action="search.php" method="post">
    <input type="text" id="search" name="search">
    <button class="search" type="submit">Найти</button>
</form>
<h2>Прайс-лист на диагностику автомобиля</h2>
<table>
  <tr>
    <th>Наименование услуги</th>
    <th>Легковые автомобили</th>
    <th>Джипы, минивены</th>
  </tr>
  <?php
$mysql = new mysqli("localhost", "root", "", "base_uslugi");
$result = $mysql->query("SELECT * FROM `diagnostika` ");
while($row=mysqli_fetch_array($result)):
?>
  <tr>
    <td><?=$row['name']?></td>
    <td><?=$row['legkovoi']?></td>	
    <td><?=$row['jeep']?></td>
  </tr>
<?php endwhile; ?>
</table>
<h2>Прайс-лист на замену масла</h2>
<table>
  <tr>
    <th>Наименование работ</th>
    <th>Легковые автомобили</th>
    <th>Джипы, минивены</th>
  </tr>
 <?php
$result = $mysql->query("SELECT * FROM `zamena` ");
while($row=mysqli_fetch_array($result)):
?>
  <tr>
    <td><?=$row['name']?></td>
    <td><?=$row['legkovoi']?></td>	
    <td><?=$row['jeep']?></td>
  </tr>
<?php endwhile; ?>
</table>
<h2>Прайс-лист на ремонт АКПП и МКПП</h2>
<table>
  <tr>
    <th>Наименование работ</th>
    <th>Стоимость</th>
    <th>Джипы, минивены</th>
  </tr>
  <?php
$result = $mysql->query("SELECT * FROM `akpp_mkpp` ");
while($row=mysqli_fetch_array($result)):
?>
  <tr>
    <td><?=$row['name']?></td>
    <td><?=$row['legkovoi']?></td>	
    <td><?=$row['jeep']?></td>
  </tr>
<?php endwhile; ?>
</table>
<h2>Прайс-лист на ремонт рулевой рейки</h2>
<table>
  <tr>
    <th>Наименование работ</th>
    <th>Стоимость</th>
    <th>Джипы, минивены</th>
  </tr>
  <?php
$result = $mysql->query("SELECT * FROM `remont` ");
while($row=mysqli_fetch_array($result)):
?>
  <tr>
    <td><?=$row['name']?></td>
    <td><?=$row['legkovoi']?></td>	
    <td><?=$row['jeep']?></td>
  </tr>
<?php endwhile; ?>
</table>
<div class="price-list">

<span class="bigzagol">Прайс-лист на диагностику автомобиля</span>
 <?php
$result = $mysql->query("SELECT * FROM `diagnostika` ");
while($row=mysqli_fetch_array($result)):
?>
<span class="smallzagol"><?=$row['name']?></span>
<span class="price"><?=$row['legkovoi']?> для легковых авто</span>
<span class="price"><?=$row['jeep']?> для джипов</span>
<?php endwhile; ?>

<span class="bigzagol">Прайс-лист на замену масла</span>

 <?php
$result = $mysql->query("SELECT * FROM `zamena` ");
while($row=mysqli_fetch_array($result)):
?>
<span class="smallzagol"><?=$row['name']?></span>
<span class="price"><?=$row['legkovoi']?> для легковых авто</span>
<span class="price"><?=$row['jeep']?> для джипов</span>
<?php endwhile; ?>

<span class="bigzagol">Прайс-лист на ремонт АКПП и МКПП</span>

 <?php
$result = $mysql->query("SELECT * FROM `akpp_mkpp` ");
while($row=mysqli_fetch_array($result)):
?>
<span class="smallzagol"><?=$row['name']?></span>
<span class="price"><?=$row['price']?> для легковых авто</span>
<?php endwhile; ?>
</div>
</div>
<footer class="footer">
  <div class="container2">
    <div class="row2">
      <div class="col-md-4">
        <ul>
          <li>300 тыс. успешных сделок</li>
          <li>Более 10 лет на рынке</li>
          <li>Хорошие отзывы</li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="d-flex flex-column align-items-center">
          <h4>Мы в социальных сетях</h4>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-odnoklassniki fa-fade"></i></a>
            <a href="#"><i class="fa-brands fa-vk fa-fade" ></i></a>
            <a href="#"><i class="fa-brands fa-instagram fa-fade"></i></a>
          </div>
          <a href="index.html"><span class="glav">Вернуться на главную страницу</span></a>
        </div>
      </div>
      <div class="col-md-4">
        <ul>
          <li>8-800-000-35-35</li>
          <li>stoasu22@mail.ru</li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</head>