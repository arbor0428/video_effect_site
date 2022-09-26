<?
	include "/home/crob/www/module/login/head.php";	
	include "/home/crob/www/module/class/class.DbCon.php";
	include "/home/crob/www/module/class/class.Util.php";
	include "/home/crob/www/module/class/class.Msg.php";
	require_once '/home/crob/www/module/Mobile-Detect-master/Mobile_Detect.php';
	$detect = new Mobile_Detect;

	if($detect->isiOS())						$UserDevice = "ios";
	elseif($detect->isAndroidOS())		$UserDevice = "android";
	else										$UserDevice = "";
	
	if($detect->isMobile())	$UserOS = 'mobile';
	else							$UserOS = 'pc';

	if($_SERVER['REMOTE_ADDR'] != '106.246.92.237'){
		if($UserOS=='mobile'){
			Msg::goNext("/m_intro.php");
		}
	}
?>

<?
	include './ks_popset.php';
	include './visit.php';
?>

<div id="fullpage">
	<div class="section sec01">
		<?
		include 'header.php';
		?>
		<div class="visual">
			<div class="videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg">
					<iframe src="https://player.vimeo.com/video/726922955?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="0621 크로브 로딩 페이지 1.mp4" data-ready="true"></iframe>
					</div>
				<div style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<div class="visualTxt">
				<p class="txtTop">콘텐츠를 완성하는 <span class="bold">마지막 숨결</span></p>
				<div class="txtBot">
					<img src="/images/logo.svg" alt="logoTxt">
				</div>
			</div>
		</div>
		<style>
			.main-clean-video-bg {position:relative; width: 100%; height: 100%; overflow: hidden;}
			.main-clean-video-bg iframe {
				width: 110vw;
				height: 80vw;
				min-height: 80vh;
				min-width: 100vh;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
			}

		</style>
	</div>
	<div class="section sec02">
		<div class="txtBox">
			<p class="bigTxt poppin">Who we are</p>
			<p class="secondTxt">가치 있는 콘텐츠로 더 나은 세상을 만드는</p>
			<p class="thirdTxt">우리는 <span class="chgwb">크로브</span> 입니다</p>
			<div class="lineBoxWrap">
				<div class="lineBar"></div>
				<div class="smalltxtBox">
					<p>가치 있는 콘텐츠로 사람과 사람, 문화와 문화를 연결합니다.<br>
					함께 나아가는 인류의 연대를 꿈꿉니다.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section sec03">
		<div class="c_center">
			<div class="sec03Wrap">
				<div id="unique-id" class="upsideChn">
					<div class="firstShow">
						<span class="numBox poppin number" data-count="1000000000">1,000,000,000</span>
						<span class="pplBox">명</span>
					</div>
					<div class="englishTxt">
					</div>
					<div class="koreanTxt">
						<span>이것은 시작일 뿐입니다.</span>
					</div>
				</div>
				<div class="graphWrap">
					<div class="cirWrap">
						<div class="txtCir">
							<p>10억명</p>
							<img src="/images/finish.png" title="무한">
						</div>
					</div>
					<div class="lastLine"></div>
					<div class="graphLine">
						<img src="/images/arrow_line.svg" alt="그래프 라인">
					</div>
					<div class="graphBack">
						<img src="/images/graph.svg" alt="그래프배경">
					</div>
					<div class="viewWrap dp_f dp_c">
						<div class="smallSquare"></div>
						<span>시청자수</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 	<script>
		    let count_first = true;
	    
			$(window).on("scroll",function(){
				let Mc2liTop1 = $(".section").eq(2).offset().top;
				let windowTop = $(window).scrollTop();
	
	
				if(count_first == true) {
					
					if(windowTop >= Mc2liTop1 && windowTop < Mc2liTop1+10) {
						countUp(1000000000,".c3-count-number1");
	
						count_first = false;
					}
				}
				else if(windowTop == 0) {
	
					count_first = true;
					countUp(0,".c3-count-number1");
				}
			});
	
			function countUp(dest,selector){
				
				let count = 0; 
				
				let autoCount = setInterval(function(){
					if(count < dest) {
						count = count + dest/100;
						count = Math.ceil(count); 
					}
			
					else if(count >= dest) {
						clearInterval(autoCount);
						count = dest;
					}
					
					$(selector).text(count.toLocaleString('en'));
				},10);
			}
	</script> -->

	<div class="section sec04">
		<div class="c_center sec04Box">
			<div class="sec04Top dp_sb">
				<div class="rotateWrap">
					<img src="/images/circle_txt.png" alt="make better">
				</div>
				<div class="missionTxt">
					<p class="blueTit poppin">Misson & Value</p>
					<p class="blackDetail">콘텐츠로 사랑하고<br>콘텐츠로 사랑받는 기업</p>
				</div>
			</div>
			<div class="sec04Bot dp_sb">
				<div class="iconWrap">
					<div class="iconBox">
						<div class="">
							<div class="iconImg">
								<img src="/images/icon01.png" alt="최고">
							</div>
							<p class="iconTxt">최고</p>
						</div>
					</div>
					<div class="i_hoverBox">
						<p class="ihTit">최고</p>
						<p class="ihDet">
							우리는 적당한 수준이 아닌<br>
							최고 수준을 추구합니다.
						</p>
					</div>
				</div>
				<div class="iconWrap">
					<div class="iconBox">
						<div class="iconImg">
							<img src="/images/icon02.png" alt="성장">
						</div>
						<p class="iconTxt">성장</p>
					</div>
					<div class="i_hoverBox">
						<p class="ihTit">성장</p>
						<p class="ihDet">
							우리는 끊임없는 학습으로<br>
							매일 성장합니다.
						</p>
					</div>
				</div>
				<div class="iconWrap">
					<div class="iconBox">
						<div class="iconImg">
							<img src="/images/icon03.png" alt="도전">
						</div>
						<p class="iconTxt">도전</p>
					</div>
					<div class="i_hoverBox">
						<p class="ihTit">도전</p>
						<p class="ihDet">
							우리는 계속 도전하고<br>
							결과를 만들어냅니다.
						</p>
					</div>
				</div>
				<div class="iconWrap">
					<div class="iconBox">
						<div class="iconImg">
							<img src="/images/icon04.png" alt="긍정">
						</div>
						<p class="iconTxt">긍정</p>
					</div>
					<div class="i_hoverBox">
						<p class="ihTit">긍정</p>
						<p class="ihDet">
							우리는 긍정적인 시야로<br>
							해결책을 실행합니다.
						</p>
					</div>
				</div>
				<div class="iconWrap">
					<div class="iconBox">
						<div class="iconImg">
							<img src="/images/icon05.png" alt="사랑">
						</div>
						<p class="iconTxt">사랑</p>
					</div>
					<div class="i_hoverBox">
						<p class="ihTit">사랑</p>
						<p class="ihDet">
							우리는 세상을 사랑하고<br>
							세상에게 사랑받습니다.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section sec05">
		<div class="c_center">
			<div class="sec05Wrap">
				<div class="sec05Top">
					<div class="afterShow">
						<h3  class="sec05subT poppin">Our Next</h3>
						<div class="topLine dp_sb dp_c">
							<div class="barTxtBox">
								<p>시작은 창대하였으며<br>
									끝은 위대하리라
								</p>
							</div>
							<div class="contactBtn">
								<a href="/sub04/sub01.php" title="">
									<div class="hoverCir"></div>
									<div class="contactTxt dp_sb dp_c">
										<span class="poppin">CONTACT US</span>
										<span class="lnr lnr-arrow-right"></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="sec05Bot dp_sb">
					<div class="sec05Menu">
						<a class="menuTxt poppin" data-text="About" href="/sub01/sub01.php" title="">About
						</a>
					</div>
					<div class="sec05Menu">
						<a class="menuTxt poppin" data-text="Works" href="/sub02/sub01.php" title="">Works
						</a>
					</div>
					<div class="sec05Menu">
						<a class="menuTxt poppin" data-text="News" href="/sub03/sub01.php" title="">News
						</a>
					</div>
					<div class="sec05Menu">
						<a class="menuTxt poppin" data-text="Contact" href="/sub04/sub01.php" title="">Contact
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?
	include './footer.php';
?>


