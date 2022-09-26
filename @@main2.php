<?
	include "/home/crob/www/module/login/head2.php";	
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

<div id="fullpage2">
	<div class="section sec01">
		<?
		include 'header2.php';
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
	<div class="section sec03 main_sec03">
		<div class="c_center">
			<div class="sec03Wrap">
				<div id="unique-id" class="upsideChn">
					<div class="firstShow">
						<span class="numBox poppin number" data-count="1000000000">1,000,000,000</span>
						명
					</div>
					<div class="englishTxt">
						<span>We are proved</span>
					</div>
					<div class="koreanTxt">
						<span>이것은 시작일 뿐입니다.</span>
					</div>
				</div>
				<div class="graphWrap">

					<div class="cirWrap" style='transform:scale(0.4);transition:transform 3s;opacity:0;'>
						<div class="txtCir">
							<p>10억명</p>
							<img src="/images/finish.png" title="무한" class='finish' style='display:none;'>
						</div>
					</div>
					<div class="lastLine2"></div>
					<div class="lastLine"></div>
					<div class="graphLine">

						<svg xmlns="http://www.w3.org/2000/svg" width="1342.121" height="447.35" viewBox="0 0 1342.121 447.35">
						  <g id="arrow" transform="translate(-206.648 -2082.389)">
							 <path id="path2" data-name="path2" d="M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0" transform="translate(-4905.212 -10690.509)" fill="none" stroke="#6f8de9" stroke-linecap="round" stroke-width="10"/>
							
							 <path id="path" data-name="path"  stroke-dasharray="0,1395" style="stroke-dasharray: 0,1395;" d="M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0" transform="translate(-4905.212 -10690.509)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="10"/>


							<path id="path3" data-name="path3"d="M1083.46,8.41,1124.49,0l-13.23,39.73-7.911-20.9Z" transform="matrix(0.921, 0.391, -0.391, 0.921, 513.671, 1659.048)" fill="#6f8de9"/>
							
						  </g>
						</svg>
						<!-- <div id='numTest'></div> -->

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
			<div class="sec04Bot">
				<div class="iconWrap iconW01">
					<div class="iconBox">
						<div class="">
							<div class="iconImg">
								<svg id="bestIcon" xmlns="http://www.w3.org/2000/svg" width="84.913" height="100" viewBox="0 0 84.913 100">
								  <line id="" data-name="" y1="11.08" transform="translate(49.861)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.693"/>
								  <line id="" data-name="" y1="7.83" x2="7.83" transform="translate(73.369 12.982)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.693"/>
								  <line id="" data-name="" x1="7.83" y1="7.83" transform="translate(18.522 12.982)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.693"/>
								  <path id="" data-name="" d="M81.107,51.8A8.495,8.495,0,0,0,74.7,48.9H53.721a34.552,34.552,0,0,0,4.155-16.4,8.4,8.4,0,1,0-16.8,0,18.467,18.467,0,0,1-3.25,10.471l-5.909,8.735H24.266V89.953h8.366v.683a8.329,8.329,0,0,0,8.384,7.516h28.07A8.329,8.329,0,0,0,77.377,91.3l5.54-32.834A8.07,8.07,0,0,0,81.107,51.8Z" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.693"/>
								  <rect id="" data-name="" width="22.419" height="49.252" transform="translate(1.847 48.901)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.693"/>
								</svg>
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
				<div class="iconWrap iconW02">
					<div class="iconBox">
						<div class="iconImg">
							<svg id="growthIcon" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 71.429">
							  <path id="" data-name="" d="M2.041,0V69.388H100" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <circle id="" data-name="" cx="6.122" cy="6.122" r="6.122" transform="translate(12.245 46.939)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <circle id="" data-name="" cx="6.122" cy="6.122" r="6.122" transform="translate(79.592 6.122)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <circle id="" data-name="" cx="6.122" cy="6.122" r="6.122" transform="translate(55.102 32.653)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <circle id="" data-name="" cx="6.122" cy="6.122" r="6.122" transform="translate(36.735 18.367)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <line id="" data-name="" y1="22.408" x2="19.184" transform="translate(21.02 27.571)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <line id="" data-name="" x2="11.959" y2="9.306" transform="translate(46.061 26.98)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							  <line id="" data-name="" y1="20.531" x2="18.98" transform="translate(63.98 15.245)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4.082"/>
							</svg>
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
				<div class="iconWrap iconW03">
					<div class="iconBox">
						<div class="iconImg">
							<svg id="challIcon" xmlns="http://www.w3.org/2000/svg" width="87.178" height="100" viewBox="0 0 87.178 100">
							  <path id="" data-name="" d="M69.016,43.7A25.427,25.427,0,1,0,32.692,66.636v20.65a10.9,10.9,0,0,0,21.794,0V66.636A25.427,25.427,0,0,0,69.016,43.7Z" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <path id="" data-name="" d="M32.692,79.386a25.427,25.427,0,0,0,21.794,0" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" x2="10.897" transform="translate(76.28 43.698)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" x2="10.897" transform="translate(0 43.698)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" x2="7.701" y2="7.719" transform="translate(66.709 66.8)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" x2="7.701" y2="7.701" transform="translate(12.768 12.877)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" y1="7.701" x2="7.701" transform="translate(66.709 12.877)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" y1="10.897" transform="translate(43.589)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <line id="" data-name="" y1="7.719" x2="7.701" transform="translate(12.768 66.8)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							  <path id="" data-name="" d="M32.583,42.317l9.408,9.39L57.664,36.033" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="3.632"/>
							</svg>
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
				<div class="iconWrap iconW04">
					<div class="iconBox">
						<div class="iconImg">
							<svg id="posiIcon" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 92">
							  <path id="" data-name="" d="M23.84,75.54A20,20,0,0,1,18,90,20,20,0,0,0,35.28,80,56.98,56.98,0,0,0,50,82c26.5,0,48-18,48-40S76.5,2,50,2,2,20,2,42C2,56,10.7,68.42,23.84,75.54Z" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							  <circle id="" data-name="" cx="4" cy="4" r="4" transform="translate(32 31.32)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							  <circle id="" data-name="" cx="4" cy="4" r="4" transform="translate(60 31.32)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							  <path id="" data-name="" d="M31.38,49.48a26.6,26.6,0,0,0,37.24,0" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							</svg>
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
				<div class="iconWrap iconW05">
					<div class="iconBox">
						<div class="iconImg">
							<svg id="loveIcon"  xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 87.996">
							  <path id="" data-name="" d="M95.056,38.418A24.939,24.939,0,0,0,98,26.6,24.3,24.3,0,0,0,74,2,23.739,23.739,0,0,0,57.017,9.2h0L50,16.419,42.978,9.2h0A23.739,23.739,0,0,0,26,2,24.3,24.3,0,0,0,2,26.6,24.859,24.859,0,0,0,9.02,44h0L16,51.2,50,86l6-6.22" transform="translate(0.002 0)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							  <path id="" data-name="" d="M98,56.3A12.159,12.159,0,0,0,86,44a11.8,11.8,0,0,0-8.48,3.6h0L74,51.2l-3.52-3.6h0A11.8,11.8,0,0,0,62,44,12.159,12.159,0,0,0,50,56.3a12.38,12.38,0,0,0,3.52,8.7h0l3.5,3.6L74,86,90.976,68.6l3.5-3.6h0A12.379,12.379,0,0,0,98,56.3Z" transform="translate(0.002 0)" fill="none" stroke="#4169e2" stroke-linejoin="round" stroke-width="4"/>
							</svg>
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
						<div class="topLine">
							<div class="lineBar"></div>
							<div class="barTxtBox">
								<p>
									시작은 창대하였으며<br>
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
	include './footer3.php';
?>

	<style>
		.sec04 .sec04Bot .iconW01 {opacity: 1;}
		.sec04 .sec04Bot .iconW02 {opacity: 1;}
		.sec04 .sec04Bot .iconW03 {opacity: 1;}
		.sec04 .sec04Bot .iconW04 {opacity: 1;}
		.sec04 .sec04Bot .iconW05 {opacity: 1;}
	</style>


