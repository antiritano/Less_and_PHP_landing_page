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
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
  <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
  <?php include 'navItems.php'; ?>
  <?php include 'slides.php'; ?>
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
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <?php foreach ($slides as $slide) { ?>
          <li class="glide__slide"><img class="slideImage" src="<?php echo $slide; ?>" /></li>
          <?php } ?>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">←</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">→</button>
      </div>
    </div>
    <div class="findYourFit">
      <section class="findYourFit__wrapper">
        <div class="findYourFit__content">
          <h2>FIND YOUR FIT</h2>
          <a class="btn__blue" href="/" data-uw-rm-brl="false">Take the Quiz</a>
          <p>Finding the correct fitting pillow is critical to rest and recovery.</p>
        </div>
      </section>
    </div>
    <div class="home-icons">
      <div class="home-icon">
        <div class="benefit-icon">
          <!--?xml version="1.0" encoding="utf-8"?-->
          <!-- Generator: Adobe Illustrator 25.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
            <path d="M299.6,134.5L271,95.9h-66.7V59.6H0.4v159.8h19.3c2.1,11.9,12.6,21,25.1,21s23-9.1,25.1-21h11.9c2.1,11.9,12.6,21,25.1,21
    	s22.9-9.1,25.1-21h72.3v-0.1h17.3c2.1,12,12.6,21.1,25.1,21.1s22.9-9.1,25.1-21.1h27.8V134.5z M194.4,69.5v88.1H10.3V69.5H194.4z
    	 M44.8,230.6c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6C60.4,223.6,53.4,230.6,44.8,230.6z
    	 M106.9,230.6c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6c8.6,0,15.6,7,15.6,15.6C122.5,223.6,115.5,230.6,106.9,230.6z
    	 M131.8,209.5c-2.5-11.5-12.7-20.1-24.9-20.1c-12.2,0-22.4,8.7-24.9,20.1H69.7C67.3,198,57,189.4,44.8,189.4
    	c-12.2,0-22.4,8.7-24.9,20.1h-9.6v-42h184.1v42H131.8z M246.7,230.6c-8.6,0-15.6-7-15.6-15.6c0-8.6,7-15.6,15.6-15.6
    	c8.5,0,15.5,7,15.6,15.6C262.3,223.6,255.3,230.6,246.7,230.6z M289.7,209.4h-18.1c-2.5-11.4-12.7-20-24.9-20
    	c-12.2,0-22.4,8.6-24.9,20h-17.5V105.8H266l23.7,31.9V209.4z M221.9,125v42.8H275V146l-15.9-21H221.9z M265.2,157.9h-33.4v-23.1
    	h22.5l10.9,14.4V157.9z"></path>
          </svg>

        </div>
        <h3>Free US Shipping &amp; Easy Returns</h3>
      </div>
      <div class="home-icon">
        <div class="benefit-icon">
          <!--?xml version="1.0" encoding="utf-8"?-->
          <!-- Generator: Adobe Illustrator 25.2.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
            <path id="NhWuUq_1_" d="M401.1,211.7c45.5,37.5,91.5,75.3,137.4,113.2c45,37.1,89.9,74.4,135.2,111.2c9,7.3,13.4,14.6,13.3,26.9
    	c-0.6,71.5-0.3,142.9-0.3,214.4c0,32-9.2,41-41.6,41c-53.6,0-107.2,0-160.8,0c-6.4,0-12.7,0-20.5,0c0-63.5,0-124.6,0-187.3
    	c-42.6,0-83.8,0-126.9,0c0,61.8,0,123.5,0,187.3c-14.7,0-27.7,0-40.6,0c-49.4,0-98.9,0.1-148.3,0c-22.5-0.1-33.8-9.8-33.9-31.9
    	c-0.5-76.8-0.4-153.7,0.1-230.5c0-5.1,3.2-11.8,7.1-15.1c91.7-75.9,183.7-151.5,275.7-227.1C397.7,213,399,212.7,401.1,211.7z
    	 M555.9,297.2c60.4,50.3,120.7,100.7,181.1,151c15.8,13.1,21.6,12.5,35.4-3.5c6.6-7.6,13.1-15.4,19.5-23.3
    	c11.7-14.4,10.9-22.4-3.4-34.4c-29.7-24.8-59.3-49.8-89.5-73.9c-9.3-7.4-12.7-15.4-12.6-27.2c0.6-57.8,0.3-115.5,0.2-173.3
    	c0-26-3.1-29.1-28.3-29.1c-23.2,0-46.5,0-69.7,0c-27.5,0-29.9,2.3-29.9,29.1c0,26.5,0,53,0,82.5c-7.3-5.6-11.9-9-16.3-12.6
    	c-33.8-28.2-67.5-56.7-101.5-84.6c-26.5-21.8-56.2-21.6-82.9,0.6c-115.8,96.3-231.5,192.8-347.4,289c-12.6,10.5-14.6,20.7-3.5,33.2
    	c7.1,8,13.6,16.5,20.7,24.6c13.4,15.4,19.6,15.9,35.6,2.6c74.1-61.8,148.1-123.6,222.2-185.4c37.9-31.6,75.8-63.1,114.3-95.1
    	C452.6,211.1,504.3,254.1,555.9,297.2z"></path>
          </svg>

        </div>
        <h3>Contactless delivery</h3>
      </div>
      <div class="home-icon">
        <div class="benefit-icon">
          <!--?xml version="1.0" encoding="utf-8"?-->
          <!-- Generator: Adobe Illustrator 26.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
            <g id="_x35__Stars_1_">
            </g>
            <path d="M250,156c35.5,0,64.4,28.9,64.4,64.4s-28.9,64.4-64.4,64.4s-64.4-28.9-64.4-64.4S214.5,156,250,156 M250,145
    	c-41.6,0-75.4,33.7-75.4,75.4s33.8,75.4,75.4,75.4s75.4-33.7,75.4-75.4S291.6,145,250,145L250,145z M301,315
    	c32.8,0,60.1,23.9,65.3,55.2H134.6c5.3-31.3,32.6-55.2,65.3-55.2H301 M301,304H199.9c-42.7,0-77.2,34.6-77.2,77.2h255.6
    	C378.2,338.6,343.7,304,301,304L301,304z M395.1,150.1c27.9,0,50.6,22.7,50.6,50.6s-22.7,50.6-50.6,50.6s-50.6-22.7-50.6-50.6
    	S367.2,150.1,395.1,150.1 M395.1,139.1c-34,0-61.6,27.6-61.6,61.6s27.6,61.6,61.6,61.6s61.6-27.6,61.6-61.6S429.1,139.1,395.1,139.1
    	L395.1,139.1z M436.8,280.1c25,0,46,17.7,51,41.2H377.5c-8.1-10.3-18.2-18.9-29.7-25.2c-6.5-3.6-13.5-6.4-20.6-8.4
    	c8.1-4.9,17.4-7.6,27-7.6H436.8 M436.8,269.1h-82.7c-21,0-39.6,10.2-51.1,26c28.5,0.7,53.6,15.2,68.8,37.2H500
    	C500,297.4,471.7,269.1,436.8,269.1L436.8,269.1z M104.1,150.1c27.9,0,50.6,22.7,50.6,50.6s-22.7,50.6-50.6,50.6
    	s-50.6-22.7-50.6-50.6S76.2,150.1,104.1,150.1 M104.1,139.1c-34,0-61.6,27.6-61.6,61.6s27.6,61.6,61.6,61.6s61.6-27.6,61.6-61.6
    	S138.2,139.1,104.1,139.1L104.1,139.1z M145.9,280.1c9.7,0,19.2,2.8,27.3,7.7c-7.1,2-14,4.9-20.4,8.5c-11.2,6.3-21.3,14.8-29.3,25
    	H12.2c5.1-23.5,26-41.2,51-41.2H145.9 M145.9,269.1H63.2C28.3,269.1,0,297.4,0,332.3h129c15.1-21.7,39.8-36.2,67.9-37.2
    	C185.4,279.3,166.9,269.1,145.9,269.1L145.9,269.1z M250,262.1c-13.3,0-25.3-4.6-33.2-12.5c-1.9-2-1.9-5.1,0.1-7.1
    	c2-1.9,5.1-1.9,7.1,0.1c5.9,6,15.6,9.5,26,9.5c10.8,0,20.7-3.7,26.5-10c1.9-2,5-2.1,7.1-0.3c2,1.9,2.1,5,0.3,7.1
    	C276.2,257.2,263.5,262.1,250,262.1z M98.2,230.7c-10,0-19.5-3.6-25.3-9.6c-1.7-1.8-1.7-4.6,0.1-6.4c1.8-1.7,4.6-1.7,6.4,0.1
    	c4.2,4.3,11.3,6.8,18.9,6.8c7.8,0,15-2.7,19.2-7.2c1.7-1.8,4.6-1.9,6.4-0.2s1.9,4.6,0.2,6.4C118,227.1,108.6,230.7,98.2,230.7z
    	 M401.3,230.7c-10,0-19.5-3.6-25.3-9.6c-1.7-1.8-1.7-4.6,0.1-6.4c1.8-1.7,4.6-1.7,6.4,0.1c4.2,4.3,11.3,6.8,18.9,6.8
    	c7.8,0,15-2.7,19.2-7.2c1.7-1.8,4.6-1.9,6.4-0.2c1.8,1.7,1.9,4.6,0.2,6.4C421.1,227.1,411.7,230.7,401.3,230.7z">
            </path>
          </svg>


        </div>
        <h3>Over 19 Million Happy Sleepers</h3>
      </div>
      <div class="home-icon">
        <div class="benefit-icon">
          <!--?xml version="1.0" encoding="utf-8"?-->
          <!-- Generator: Adobe Illustrator 25.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
            <g id="_x35__Stars_1_">
            </g>
            <path d="M465.5,75.7v60.2c0,11.3-9.2,20.5-20.5,20.5H268L250.5,203l-17.5-46.6H55c-11.3,0-20.5-9.2-20.5-20.5V75.7
    	c0-11.3,9.2-20.5,20.5-20.5h390C456.3,55.3,465.5,64.4,465.5,75.7z M109,111.3l18.9-16.2l-24.8-2l-9.5-23l-9.5,23l-24.8,2l18.9,16.2
    	l-5.8,24.2l21.2-13l21.2,13L109,111.3z M187.2,111.3l18.9-16.2l-24.8-2l-9.5-23l-9.5,23l-24.8,2l18.9,16.2l-5.8,24.2l21.2-13
    	l21.2,13L187.2,111.3z M265.4,111.3l18.9-16.2l-24.8-2l-9.5-23l-9.5,23l-24.8,2l18.9,16.2l-5.8,24.2l21.2-13l21.2,13L265.4,111.3z
    	 M343.7,111.3l18.9-16.2l-24.8-2l-9.5-23l-9.5,23l-24.8,2l18.9,16.2l-5.8,24.2l21.2-13l21.2,13L343.7,111.3z M421.9,111.3l18.9-16.2
    	l-24.8-2l-9.5-23l-9.5,23l-24.8,2l18.9,16.2l-5.8,24.2l21.2-13l21.2,13L421.9,111.3z M250,222.2c35.5,0,64.4,28.9,64.4,64.4
    	S285.5,351,250,351s-64.4-28.9-64.4-64.4S214.5,222.2,250,222.2 M250,211.2c-41.6,0-75.4,33.7-75.4,75.4S208.4,362,250,362
    	s75.4-33.7,75.4-75.4S291.6,211.2,250,211.2L250,211.2z M301,381.2c32.8,0,60.1,23.9,65.3,55.2H134.6c5.3-31.3,32.6-55.2,65.3-55.2
    	H301 M301,370.2H199.9c-42.7,0-77.2,34.6-77.2,77.2h255.6C378.2,404.8,343.7,370.2,301,370.2L301,370.2z M395.1,216.3
    	c27.9,0,50.6,22.7,50.6,50.6c0,27.9-22.7,50.6-50.6,50.6c-27.9,0-50.6-22.7-50.6-50.6C344.5,239,367.2,216.3,395.1,216.3
    	 M395.1,205.3c-34,0-61.6,27.6-61.6,61.6s27.6,61.6,61.6,61.6c34,0,61.6-27.6,61.6-61.6S429.1,205.3,395.1,205.3L395.1,205.3z
    	 M436.8,346.3c25,0,46,17.7,51,41.2H377.5c-8.1-10.3-18.2-18.9-29.7-25.2c-6.5-3.6-13.5-6.4-20.6-8.4c8.1-4.9,17.4-7.6,27-7.6H436.8
    	 M436.8,335.3h-82.7c-21,0-39.6,10.2-51.1,26c28.5,0.7,53.6,15.2,68.8,37.2H500C500,363.6,471.7,335.3,436.8,335.3L436.8,335.3z
    	 M104.1,216.3c27.9,0,50.6,22.7,50.6,50.6c0,27.9-22.7,50.6-50.6,50.6s-50.6-22.7-50.6-50.6C53.5,239,76.2,216.3,104.1,216.3
    	 M104.1,205.3c-34,0-61.6,27.6-61.6,61.6s27.6,61.6,61.6,61.6s61.6-27.6,61.6-61.6S138.2,205.3,104.1,205.3L104.1,205.3z
    	 M145.9,346.3c9.7,0,19.2,2.8,27.3,7.7c-7.1,2-14,4.9-20.4,8.5c-11.2,6.3-21.3,14.8-29.3,25H12.2c5.1-23.5,26-41.2,51-41.2H145.9
    	 M145.9,335.3H63.2C28.3,335.3,0,363.6,0,398.5h129c15.1-21.7,39.8-36.2,67.9-37.2C185.4,345.5,166.9,335.3,145.9,335.3L145.9,335.3
    	z"></path>
          </svg>
        </div>
        <h3>Over 65,000 5-star reviews</h3>
      </div>
    </div>
    <script>
      new Glide('.glide').mount()
    </script>
    <script src="" async defer></script>
</body>

</html>