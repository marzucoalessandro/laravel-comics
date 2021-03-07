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

    @foreach($comics as $comic)

      <div class="card_one">
        <span class="flag">comic book</span>
          <a href="#"><img class="" src="{{ asset ('storage/' . $comic->cover)}}" alt="batman"></a> 
          <p class="small_text">{{ $comic->title}}</p>
          <p class="available">available now</p>
      </div>


    @endforeach
    <!-- <div class="card_one">
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
    </div> -->
</header>
