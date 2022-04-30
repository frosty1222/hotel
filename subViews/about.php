<?php include_once('../layout/header.php')?>
<div class="about_container">
    <legend>LeaderShip</legend>
    <div class="about">
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="../public/images/xperson_1.jpg" alt="">
                  <span class="img-name"><b>Will Peters</b> <br> president</span>
              </li>
           </ul>
           <ul class="about-flip-card-back">
              <li class="text">
                   “Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic life One day however a small line of blind text by the name
                  of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img"><img src="../public/images/xperson_1.jpg" alt="" width="50"></span>
                  <span class="right-name">
                      <b>Will Peters</b> <br>President
                  </span>
              </li>
           </ul>
        </div>
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="../public/images/xperson_2.jpg" alt="">
                  <span class="img-name"><b>Jane Williams</b> <br>  Business Manager</span>
              </li>
           </ul>
           <ul class="about-flip-card-back">
              <li class="text">
                  “Even the all-powerful Pointing has no control about the blind texts it
                  is an almost unorthographic life One day however a small line of blind text by
                  the name of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img"><img src="../public/images/xperson_2.jpg" alt="" width="50"></span>
                  <span class="right-name">
                      <b>Jane Williams </b> <br>Business Manager
                  </span>
              </li>
           </ul>
        </div>
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="../public/images/xperson_3.jpg" alt="">
                  <span class="img-name"><b>Jeffrey Neddery</b> <br> Marketing Director</span>
              </li>
            </ul>
            <ul class="about-flip-card-back">
              <li class="text">
                  “Even the all-powerful Pointing has no control about the blind texts it is an almost
                  unorthographic life One day however a small line
                  of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img">
                      <img src="../public/images/xperson_3.jpg" alt="" width="50">
                  </span>
                  <span class="right-name">
                      <b>Jeffrey Neddery </b> <br> Marketing Director
                  </span>
              </li>
           </ul>
        </div>
    </div>
    <!-- slider -->
   <div class="photo">
        <div class="main-photo">
        <legend class="photos">Photos</legend>
        <p class="text-center">
            Far far away, behind the word mountains, far from the countries Vokalia and <br>
        Consonantia,there live the blind texts.Separated they live in Bookmarksgrove right at the <br>
                    coast of the Semantics,a large language ocean.
        </p>
        <div class="carosel-photo">
            <div class="slide_main">
            <div class="slide active">
                <img src="../public/images/xslider-1.jpg" alt="photo">
            </div>
            <div class="slide">
                <img src="../public/images/xslider-2.jpg" alt="photo">
            </div>
            <div class="slide">
                <img src="../public/images/xslider-3.jpg" alt="photo">
            </div>
            <div class="slide">
                <img src="../public/images/xslider-4.jpg" alt="photo">
            </div>
            <div class="slide">
                <img class="" src="public/images/xslider-5.jpg" alt="photo">
            </div>
            <div class="slide">
                <img  src="public/images/xslider-6.jpg" alt="photo">
            </div>
            <div class="slide">
                <img src="../public/images/xslider-7.jpg" alt="photo">
            </div>
            </div>
            <ul class="dot">
                    <li class="active_but"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
            <span id="pre" onclick="previous()"><i class="fa fa-angle-left fa-5x"></i></span>
            <span id="next" onclick="nextimage()"><i class="fa fa-angle-right fa-5x"></i></span>
        </div>
        </div>
    </div>
    <div class="history-container">
        <legend>History</legend>
        <div class="history">
            <span class="history-point">2021</span>
           <ul class="main-history-text">
               <label for="title">More Branches Worldwide</label>
               <li class="his_text">
                   Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                   there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                   A small river named Duden flows by their place and supplies it with the necessary regelialia.
                   It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
               </li>
           </ul>
            <span class="history-point">2011</span>
           <ul class="main-history-text">
               <label for="title">Company Full Blast</label>
               <li class="his_text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
               </li>
           </ul>
            <span class="history-point">2008</span>
           <ul class="main-history-text">
               <label for="title">The Birth of the Company</label>
               <li class="his_text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
               </li>
           </ul>
        </div>
    </div>
</div>
<?php include_once('../layout/footer.php')?>