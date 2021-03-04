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
            <span class="flag">comic book</span>
            <img class="first_img" src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/BM_106_300-001_HD_60343a048f2af5.78911718.jpg?itok=2PO-YXXX" alt="batman">
            <p class="small_text">batman #106</p>
            <p class="available">available now</p>
          </div>
          <div class="card_one">
            <span class="flag">comic book</span>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/CRIMESYN_01_300-001_HD_60343d66789362.85081498.jpg?itok=7W1LwUEE" alt="batman">
            <p class="small_text">crime syndicate #1</p>
            <p class="available">available now</p>
          </div>
          <div class="card_one">
            <span class="flag">comic book</span>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/INFFRONTIER_00_300-001_HD_60343ebbcf91c6.60131949.jpg?itok=jM5bt2sZ" alt="batman">
            <p class="small_text">infinite frontier #0</p>
            <p class="available">available now</p>
          </div>
          <div class="card_one">
            <span class="flag">comic book</span>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/MANBAT_02_300-001_HD_60343d7c5bd4e9.59772997.jpg?itok=2V0Y9-4M" alt="batman">
            <p class="small_text">man bat #2</p>
            <p class="available">available now</p>
          </div>
          <div class="card_one">
            <span class="flag">comic book</span>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/SWW-09_CoversCredits-3_60355ea0df3695.12671771.jpg?itok=eV8pnTV" alt="batman">
            <p class="small_text">sensational wonder woman #9</p>
            <p class="available">available now</p>
          </div>

        </div>
      </header>


    </body>
</html>
