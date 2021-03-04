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
            <img class="" src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2021/02/BM_106_300-001_HD_60343a048f2af5.78911718.jpg?itok=2PO-YXXX" alt="batman">
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
      </header>

      <main>
        <div class="container mb-6">
          <div class="row ">
            <div class="col-9">
              <h3>must reads</h3>
              <section class="must_read">
                <div class="card_two">
                  <img src="https://www.dccomics.com/sites/default/files/mustRead_DCC_5_v2_5f6b8b49bfd6a9.60761869.jpg" alt="">
                  <h4>get the inside track on all things dc</h4>
                  <h2>dc connect</h3>
                  <p>The monthly, downloadable catalog of DC' comics,graphic novel,collectibles and more</p>
                </div>
                <div class="card_two">
                  <img src="https://www.dccomics.com/sites/default/files/MUSTREAD_20190114_SandmanUniverse_5c3e4bab834ac9.58189616.jpg" alt="">
                  <h4>from the mind of neil gaiman</h4>
                  <h2>the sandman universe</h3>
                  <p>The monthly, downloadable catalog of DC' comics,graphic novel,collectibles and more</p>
                </div>
                <div class="card_two">
                  <img src="https://www.dccomics.com/sites/default/files/MUSTREAD_20190114_WonderComics_5c3e4b8d091c94.82772322.jpg" alt="">
                  <h4>these kids are all fight</h4>
                  <h2>wonder comics</h3>
                  <p>Brian Michael Bendis shines the spotlight on DC's youngest heroes!</p>
                </div>
              </section>
            </div>
          </div>
        </div>
        <section>
          <div class="collection">
            <div class="container">
              <div class="row">
                <div class="col-12 flex">
                  <div class="tag">
                    <h4 class="current">current series</h4>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2020/11/SeriesThumb7_AmericanVampire1976_5fc5637bb970f3.51703648.jpg?itok=dFqZbX0C" alt="">
                    <h5>american vampire 1976</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg?itok=DRQko-YJ" alt="">
                    <h5>batman</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2020/11/SeriesThumb7_BMBW_5fc5658b1171c4.10950786.jpg?itok=vdjPO7g4" alt="">
                    <h5>batman black and white</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2019/09/SeriesThumb5_BMvRas_5d82c7892f7e63.62526030.jpg?itok=gI2tUr8A" alt="">
                    <h5>batman vs ra's al ghul</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2020/11/SeriesThumb7_BMCW_5fc56629b44c39.86920586.jpg?itok=woc42hJR" alt="">
                    <h5>batman/catwoman</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/default_images/DC_placeholder_series_573b3c5dac0485.40480935.jpg?itok=oRZ6eTCO" alt="">
                    <h5>batman:urban legend</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2020/11/SeriesThumb7_BMWKHQ_5fc5675de13b69.95483216.jpg?itok=rjGyMJz4" alt="">
                    <h5>batman:white night</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/06/SeriesThumb5_catwoman_5b1ec42eec63e2.07910716.jpg?itok=EJyrm6sv" alt="">
                    <h5>catwoman</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/default_images/DC_placeholder_series_573b3c5dac0485.40480935.jpg?itok=oRZ6eTCO" alt="">
                    <h5>crime syndicate</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2020/06/SeriesThumb6_DCConnect_5ef2a2f4f34d10.17317418.jpg?itok=htCFuMwa" alt="">
                    <h5>dc connect</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2021/02/SeriesThumb8_DCLoveBattlefield_60305d0e0a6d74.37220374.jpg?itok=jY5TpOHt" alt="">
                    <h5>dc love is a battle</h5>
                  </div>
                  <div class="card_three">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2019/11/SeriesThumb5_FarSector_5dcb5fc5009773.36625144.jpg?itok=DzBciYp0" alt="">
                    <h5>far sector</h5>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>


      </main>




    </body>
</html>
