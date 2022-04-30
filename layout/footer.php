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
           setInterval(function(){
              $('#next').trigger('click');
           },4000);
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
        <script src="public/js/children.js"></script>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

