<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC comic Homepage</title>

        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
      <!-- costruisco la navbar -->

      <nav>
        <div class="bluebar">
          <a href="#"><img class="logodc" src="http://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_desktop_blue.svg" alt=""></a>
          <a href="#"><img src="http://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DCUI_desktop.svg" alt=""></a>
          <a href="#"><img src="http://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_SHOP_desktop.svg" alt=""></a>
          <a href="#"><img src="http://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_community.svg" alt=""></a>
          <a href="#"><img src="http://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_on_HBOMAX_desktop.svg" alt=""></a>
        </div>
        <div class="headbar">
          <div class="first">
            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="">
          </div>
          <div class="second">
            <a href="#">characters</a>
            <a href="#">comics</a>
            <a href="#">movies</a>
            <a href="#">tv</a>
            <a href="#">games</a>
            <a href="#">videos</a>
            <a href="#">news</a>
            <a href="#">shop<i class="fas fa-angle-down last"></i></a>
          </div>
          <div class="search">
            <a  href="#">Search <i class="fas fa-search"></i></a>
          </div>
        </div>
      </nav>
      <header>
        <div class="comic">
          <div class="banner">
            <h4>comics & graphic novel</h4>
          </div>
          <div class="banner_link">
            <a href="#">this week</a>
            <a href="#">last week</a>
            <a href="#">next week</a>
            <a href="#">upcoming</a>
            <a href="#">see all</a>
          </div>

          <div class="card_one">
            <div class="flag">comic book</div>
            <img src="/img/batman.jpg" alt="batman">
            <p class="small_text">batman #106</p>
            <p class="available">available now</p>
          </div>

        </div>
      </header>


    </body>
</html>
