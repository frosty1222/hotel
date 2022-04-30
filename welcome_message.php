<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hotel booking</title>

		<!-- Bootstrap CSS -->
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- css -->
		<link rel="stylesheet" href="public/css/home.css">
		<link rel="stylesheet" href="public/css/responsive.css">
		<link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container {
             width: auto;
           }
        </style>
	</head>
	<body>
	<div class="container">
    <div class="row">
        <div class="main-view">
            <div class="head" style="background-image: url('public/images/main-banner.jpg');">
               <div class="head-scroll-bar">
                  <div id="logo">
                      <span class="left-logo">North Hotel</span>
                      <span class="right-icon" onclick="clickBut()"><i class="fa fa-angle-double-right fa-3x"></i></span>
                   </div>
                   <div class="welcome">welcome to 5 <i class="fa fa-star-o" style="color:yellow"></i> Hotel</div>
                   <div class="clearfix"></div>
                   <div class="bestword">A BEST PLAY TO STAY</div>
               </div>
               <div class="model">
                   <div class="main-list">
                       <ul class="list">
                       <li><a href="welcome_message.php">Home</a></li>
						<li><a href="subViews/room.php">Rooms</a></li>
						<li><a href="subViews/about.php">About</a></li>
						<li><a href="subViews/event.php">Events</a></li>
						<li><a href="subViews/contact.php">Contact</a></li>
						<li><a href="subViews/reservation.php">Reservation</a></li>
                       </ul>
                   </div>
               </div>
            </div>
            <div class="welcome-pic">
                <div class="contain">
                   <div class="left-text">
                          <div class="text">
                            <h1 class="title-welcome">Welcome!</h1>
                            <h3 class="child-text">
                               Far far away, behind the word mountains, far from the
                               countries Vokalia and Consonantia, there live the blind texts.
                               Separated they live in
                               Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                            </h3>
                          </div>
                          <div class="button-bottom">
                              <span class="learn-more">Learn More</span>
                              <span id="or">or</span>
                              <span class="see-video">See Video</span>
                          </div>
                    </div>
                    <div class="right-pic">
                        <img src="public/images/room.jpg" alt="">
                        <div class="child-pic">
                            <img src="public/images/girl.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="room-suit">
                 <div class="contain-room">
                     <legend>Rooms & Suites</legend>
                     <div class="below-text">
                         Far far away, behind the word mountains, far from the countries <br>
                         Vokalia and Consonantia,there live the blind texts. Separated they<br>
                         live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                     </div>
                     <div class="below-pic">
                         <ul class="type_of_room">
                             <li>
                                 <div class="image-li">
                                     <img src="public/images/single_room.jpg" alt="">
                                 </div>
                                 <div class="room_type">Single Room</div>
                                 <span class="price">90$ / PER NIGHT</span>
                             </li>
                             <li>
                                 <div class="image-li">
                                    <img src="public/images/family_room.jpg" alt="">
                                 </div>
                                 <div class="room_type">Family Room</div>
                                  <span class="price">120$ / PER NIGHT</span>
                              </li>
                             <li>
                                 <div class="image-li">
                                     <img src="public/images/presidential_room.jpg" alt="">
                                 </div>
                                 <div class="room_type">Presidential Room</div>
                                  <span class="price">250$ / PER NIGHT</span>
                            </li>
                         </ul>
                     </div>
                 </div>
            </div>
            <div class="clearfix"></div>
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
                                <img src="public/images/xslider-1.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="public/images/xslider-2.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="public/images/xslider-3.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="public/images/xslider-4.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img class="" src="public/images/xslider-5.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img  src="public/images/xslider-6.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="public/images/xslider-7.jpg" alt="photo">
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
            <div class="restaurant" style="background-image:url('public/images/xhero_3.jpg');">
                <div class="main-head">
                    <div class="restaurant-main">
                        <legend>Our Restaurant Menu</legend>
                        <div class="text-res">
                            Far far away, behind the word mountains, far from the <br>
                            countries Vokalia and Consonantia,there live the blind texts.<br>
                              Separated they live in Bookmarksgrove right at the coast <br>
                                    of the Semantics,a large language ocean.
                        </div>
                        <div class="clearfix"></div>
                        <div class="menu-area">
                         <div class="dish-area">
                             <ul class="type_of_food">
                                  <li id="main"  onclick="dish_display_main()">Mains</li>
                                  <li id="dessert"  onclick="dish_display_dessert()">Desserts</li>
                                  <li id="drink"   onclick="dish_display_drink()">Drinks</li>
                             </ul>
                             <div class="dish-display-main">
                                   <div class="menu-dish-left">
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$1</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                                       <div class="menu-dish-right">
                                            <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                             </div>
                             <div class="dish-display-dessert">
                                   <div class="menu-dish-left">
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$2</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                                       <div class="menu-dish-right">
                                            <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                             </div>
                             <div class="dish-display-drink">
                                   <div class="menu-dish-left">
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$3</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                                       <div class="menu-dish-right">
                                            <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-main">
                                            <li class="image">
                                                <img src="public/images/salmon_roll.jpg" alt="">
                                                <br>
                                                <br>
                                                <span class="price">Price:20$</span>
                                                <br>
                                                <span class="name">Name:Salmon Roll</span>
                                                <br>
                                                 <a href="">order now</a>
                                            </li>
                                        </ul>
                                       </div>
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-comment">
                <div class="main-says">
                    <legend>People Says</legend>
                    <div class="list-comment">
                      <ul class="comment-child">
                          <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <li class="comments">
                                    <img src="public/images/xperson_1.jpg" alt="" id="img">
                                    <br>
                                        <p>
                                        A small river named Duden flows by their place <br>
                                        and supplies it with the necessary<br>
                                        regelialia. It is a paradisematic country,<br>
                                            in which roasted parts of <br>
                                            sentences fly into your mouth.”
                                        </p>
                                    <em>— Jean Smith</em>
                                </li>
                                </div>
                                <div class="item">
                                      <li class="comments">
                                        <img src="public/images/xperson_2.jpg" alt="" id="img">
                                        <br>
                                        <p>
                                            “Even the all-powerful Pointing has no control about the blind texts <br>
                                                it is an almost unorthographic life One day <br>
                                                however a small line of blind text  by the name of <br>
                                            Lorem Ipsum decided to leave for the far World of Grammar.”
                                        </p>
                                        <em>— John Doe</em>
                                    </li>
                                </div>
                                <div class="item">
                                       <li class="comments">
                                        <img src="public/images/xperson_3.jpg" alt="" id="img">
                                        <br>
                                        <p>
                                            “When she reached the first hills of the Italic Mountains, she had a last view <br>
                                                        back on the skyline of her hometown Bookmarksgrove, <br>
                                                        the headline of Alphabet Village and the <br>
                                                        subline of her own road, the Line Lane.
                                        </p>
                                        <em>— John Doe</em>
                                    </li>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                      </ul>
                      <!-- <div class="arrow">
                          <span id="pre-arrow" @click="preArrow()"><i class="fa fa-angle-left fa-5x"></i></span>
                          <span id="next-arrow" @click="nextArrow()"><i class="fa fa-angle-right fa-5x"></i></span>
                      </div> -->
                    </div>
                </div>
            </div>
            <div class="event">
                <legend>Events</legend>
                <div class="event-text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br>
                         there live the blind texts.Separated they live in Bookmarksgrove right <br>
                              at the coast of the Semantics, a large language ocean. <br>
                </div>
                <div class="event-list">
                  <ul class="even-child">
                        <li class="events">
                            <div class="img">
                                <img src="public/images/ximg_1.jpg" alt="">
                            </div>
                            <br>
                            <br>
                             <span class="calendar">FEBRUARY 26, 2018</span>
                             <br>
                             <span class="heading">
                                  Travel Hacks to Make Your <br>
                                   Flight More Comfortable
                             </span>
                             <br>
                             <br>
                             <span class="even-text">
                                 Far far away, behind the word mountains, <br>
                                  far from the countries Vokalia and Consonantia,<br>
                                   there live the blind texts.
                                   <br>
                             <a href="">see more</a>
                            </span>
                        </li>
                        <li class="events">
                            <div class="img">
                                 <img src="public/images/ximg_2.jpg" alt="">
                            </div>
                            <br>
                            <br>
                             <span class="calendar">FEBRUARY 26, 2018</span>
                             <br>
                             <span class="heading">
                                 5 Job Types That Aallow You
                                 To Earn As You Travel The World
                             </span>
                             <br>
                             <br>
                             <span class="even-text">
                                 Separated they live in Bookmarksgrove right <br>
                                  at the coast of the Semantics, a large language ocean.
                                  <br>
                             <a href="">see more</a>
                             </span>
                        </li>
                        <li class="events">
                            <div class="img">
                                <img src="public/images/ximg_3.jpg" alt="">
                            </div>
                            <br>
                            <br>
                             <span class="calendar">FEBRUARY 26, 2018</span>
                             <br>
                             <span class="heading">
                                 30 Great Ideas On Gifts For Travelers
                             </span>
                             <br>
                             <br>
                             <span class="even-text">
                                 A small river named Duden flows by their place and supplies <br>
                                  it with the necessary regelialia. country,<br>
                                  in which roasted parts of sentences.<br>
                               <a href="">see more</a>
                             </span>
                        </li>
                  </ul>
                </div>
            </div>
            <div class="footer" style=" background-image:url('public/images/xhero_4.jpg');">
                <div class="image-area">
                        <div class="footer-line">
                            <span class="tex-medium">A Best Place To Stay. Reserve Now!</span>
                            <a href="">Reserve Now</a>
                        </div>
                </div>
                <div class="clearfix"></div>
                <div class="main-footer">
                    <div class="inner-footer">
                        <ul class="footer-list">
                            <li class="listed">About Us</li>
                            <li class="listed">Terms & Conditions</li>
                            <li class="listed">Privacy Policy</li>
                            <li class="listed">Room</li>
                        </ul>
                       <ul class="footer-list">
                           <li class="listed">The Rooms & Suites</li>
                           <li class="listed">About Us</li>
                           <li class="listed">Contact Us</li>
                           <li class="listed">Restaurant</li>
                       </ul>
                       <ul class="footer-list">
                           <li class="listed">
                               <i class="fas fa-map-marker-alt">Address:
                                   <br>
                                   198 West 21th Street,
                                   Suite 721 New York NY 10016
                               </i>
                               <br>
                               Phone:
                                (+1) 435 3533
                               <br>
                               Email:
                                   info@domain.com
                           </li>

                       </ul>
                       <ul class="footer-list">
                           <li class="listed">
                               <span class="heading-letter">Sign up for our newsletter</span>
                               <input type="text" placeholder="Email...">
                               <button type="submit" class="btn btn-default">Send</button>
                           </li>
                       </ul>
                    </div>
                    <div class="clearfix"></div>
                     <div class="copy-right">
                    <ul id="copy-right">
                        <li class="copy-text">Copyright ©2022 All rights reserved | This template is made with  by Colorlib</li>
                        <li class="social">
                           <span><i class="fa fa-facebook"></i></span>
                           <span><i class="fa fa-twitter"></i></span>
                           <span><i class="fa fa-linkedin"></i></span>
                           <span><i class="fa fa-google"></i></span>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
		<!-- jQuery -->
		<script src="public/owlcarousel/owl.carousel.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="public/owlcarousel/owl.carousel.min.js"></script>
        <script>
				$('.owl-carousel').owlCarousel({
					rtl:true,
					loop:true,
					margin:10,
					nav:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1000:{
							items:3
						},
					}
				});
        </script>
		<script>
			var clicktime = 0;
			function clickBut(){
          var a = this.clicktime++;
          if(a %2 ==0){
              $('.model').show();
          }else{
              $('.model').hide();
          }
        }
        function autoclick(){
            $(document).ready(function(){
           setInterval(function(){
              $('#next').trigger('click');
           },4000)});
        }
		function nextimage(){
            var actives = $('.active').next();
            var currentlocation = $('.active_but').index()+1;
            if(actives.length !=0){
                $('.active').addClass('faded-left').one('webkitAnimationEnd',function(event){
                    $('.faded-left').removeClass('faded-left').removeClass('active');
                });
                actives.addClass('active').addClass('faded-right').one('webkitAnimationEnd',function(event){
                    $('.faded-right').removeClass('faded-right');
                });
                $('.dot li').removeClass('active_but');
                $('.dot li:nth-child('+(currentlocation+1)+')').addClass('active_but');
            }else{
                 $('.active').addClass('faded-left').one('webkitAnimationEnd',function(event){
                    $('.faded-left').removeClass('faded-left').removeClass('active');
                });
                $('.slide:first-child').addClass('active').addClass('faded-right').one('webkitAnimationEnd',function(event){
                    $('.faded-right').removeClass('faded-right');
                });
                $('.dot li').removeClass('active_but');
                $('.dot li:nth-child(1)').addClass('active_but');
            }
        }
		function previous(){
              var actives = $('.active').next();
              var currentlocation = $('.active_but').index()+1;
            if(actives.length !=0){
                $('.active').addClass('faded-rights').one('webkitAnimationEnd',function(event){
                    $('.faded-rights').removeClass('faded-rights').removeClass('active');
                });
                actives.addClass('active').addClass('faded-lefts').one('webkitAnimationEnd',function(event){
                    $('.faded-lefts').removeClass('faded-lefts');
                });
                 $('.dot li').removeClass('active_but');
                $('.dot li:nth-child('+(currentlocation+1)+')').addClass('active_but');
            }else{
                 $('.active').addClass('faded-rights').one('webkitAnimationEnd',function(event){
                    $('.faded-rights').removeClass('faded-rights').removeClass('active');
                });
                $('.slide:first-child').addClass('active').addClass('faded-lefts').one('webkitAnimationEnd',function(event){
                    $('.faded-lefts').removeClass('faded-lefts');
                });
                  $('.dot li').removeClass('active_but');
                  $('.dot li:nth-child(7)').addClass('active_but');
            }
           //active_nut
        }
		function dish_display_drink(){
           $('.dish-display-drink').show();
           $('.dish-display-dessert').hide();
           $('.dish-display-main').hide();
            $('.dish-display-drink').css('visibility','visible');
        }
        function dish_display_dessert(){
            $('.dish-display-drink').hide();
            $('.dish-display-dessert').show();
            $('.dish-display-main').hide();
            $('.dish-display-dessert').css('visibility', 'visible');
        }
		function dish_display_main(){
            $('.dish-display-drink').hide();
            $('.dish-display-dessert').hide();
            $('.dish-display-main').show();
        }
		</script>
		<style>
			.dot{
    width:auto;
    position: absolute;
    margin-top:-5%;
    z-index: 1;
    opacity: 1;
    margin-left: 40%;
    display:flex;
    height:auto;
    overflow: hidden;
}
.dot .active_but{
    margin-left: 0px;
    list-style: disc;
    color: #333;
    background: #fff;
    opacity: 1;
    font-size: 40px;
    font-weight: bold;
    height:auto;
}
.dot li{
    margin-left:25px;
    background: transparent;
    font-size:40px;
    list-style:circle;
    color:aquamarine;
    height: auto;
    opacity: 0.6;
}
.faded-left{
    animation: faded-left 1s forwards;
}
.faded-lefts{
    animation: faded-lefts 1s backwards;
}
@keyframes faded-left{
    from {
        transform:translateX(0%);
    }
    to{
        transform:translateX(100%);
    }
}
@keyframes faded-lefts{
    from {
        transform:translateX(100%);
    }
    to{
        transform:translateX(0%);
    }
}
.faded-right{
    animation: faded-right 1s forwards;
}
.faded-rights{
    animation: faded-rights 1s backwards;
}
@keyframes faded-rights{
    from {
        transform:translateX(0%);
    }
    to{
        transform:translateX(-100%);
    }
}
@keyframes faded-right{
    from {
        transform:translateX(-100%);
    }
    to{
        transform:translateX(0%);
    }
}
		</style>
        <script src="public/js/children.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>


