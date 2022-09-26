
    <header id="header" class="header">
		<div class="h_center dp_sb dp_c">
			<h1 class="logo">
				<a href="/"><img src="/images/logo_c.png" alt="logo"></a>
			</h1>
			<div class="h_right dp_f dp_c">
				<p class="menu_txt poppin">MENU</p>
				<div class="h_menu">
					<div class="h_backgrd"></div>
					<button type="button" class="hm_btn">
						<i></i>
						<i></i>
						<span class="blind">MENU</span>
					</button>
				</div>
			</div>
			<div class="whole_menuWrap">
				<div class="w_menu_center dp_f dp_cc">
					<div class="menu_gnb dp_f dp_c">
						<ul>
							<li>
								<a class="poppin" href="/sub01/sub01.php" data-text="ABOUT" title="">ABOUT</a>
							</li>
							<li>
								<a class="poppin" href="/sub02/sub01.php" data-text="WORKS" title="">WORKS</a>
							</li>
							<li>
								<a class="poppin" href="/sub03/sub01.php" data-text="NEWS" title="">NEWS</a>
							</li>
							<li>
								<a class="poppin" href="/sub04/sub01.php" data-text="CONTACT" title="">CONTACT</a>
							</li>
						</ul>
					</div>
					<div class="menu_info">
						<ul class="info_list">
							<li>
								<a href="https://blog.naver.com/herald1202" target="_blank" title="">
									<img src="/images/blog.png" alt="">
									<span class="poppin">blog</span>
								</a>
							</li>
							<!--
							<li>
								<a href="" title="">
									<img src="/images/insta.png" alt="">
									<span class="poppin">instagram</span>
								</a>
							</li>
							-->
						</ul>
					</div>
				</div>
			</div>
		</div>
    </header>

	<script>
			var flag = true;
			$(".h_menu").click(function(){

				if(flag){
				$(".h_menu").addClass("open");
				$(".whole_menuWrap").addClass("open");
				$(".menu_txt").text('CLOSE');
				$(".menu_txt").css({"color":"#ffffff"});
				$('html, body').css({'overflow': 'hidden', 'height': '100%'});
				$('body').on('scroll touchmove mousewheel', function(event) {
				  event.preventDefault();
				  event.stopPropagation();
				  return false;
				});

					flag= false;
				} else {
				$(".h_menu").removeClass("open");
				$(".whole_menuWrap").removeClass("open");
				$(".menu_txt").text('MENU');
				$(".menu_txt").css({"color":"#01010D"});
				$('html, body').css({'overflow': 'hidden', 'height': 'auto'});
				$('body').off('scroll touchmove mousewheel');
					flag= true;
				}
			});
	</script>




