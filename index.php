<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles.css">
  <?php include 'navItems.php'; ?>
</head>

<body>
  <header>
    <div class="promoBanner__wrapper">
      <div class="promoBanner__output">
      </div>
      <script>
        const promoBannerText = [
          'No More Comfort Compromises',
          'Get Fit for The Perfect Pillow',
          'Get Fit for The Perfect Mattress'
        ];
        const INTERVAL = 5000;  // in milliseconds
        promoBannerText.forEach((item, index) => {
          setTimeout(() => {
            document.getElementsByClassName("promoBanner__output")[0].innerText = item;
          }, INTERVAL * index);

        });
      </script>
    </div>
    <div class="header__wrapper">
      <div class="header__logo">
        <a href='/'>
          <img class="header__logoImg" src="./logo.png" alt="logo">
        </a>
      </div>
      <div class="header__navWrapper">
        <ul class="header__navList">
          <?php foreach ($mainNav as $navItem) { ?>
          <li><a href="#"><?php echo $navItem; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="header__search">
        <input type="text" placeholder="Search">
      </div>
    </div>
    <script src="" async defer></script>
</body>

</html>