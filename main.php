<?
	include "/home/crob/www/module/login/head2_test.php";	
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
			<script src="https://player.vimeo.com/api/player.js"></script>
			<div class="videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg pc">
					<iframe src="https://player.vimeo.com/video/726922955?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="0621 크로브 로딩 페이지 1.mp4" data-ready="true"></iframe>
				</div>
				<div style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>
			</div>
			<div class="tab_videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg tab">
					<iframe src="https://player.vimeo.com/video/742161020?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen  title="0822 크로브 모바일.mp4"></iframe>
				</div>
				<div style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>
			</div>
			<div class="m_videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg mobile">
					<iframe src="https://player.vimeo.com/video/742159690?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen  title="0822 크로브 모바일.mp4"></iframe>
				</div>
				<div style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>
			</div>
			<style>
				.m_videoWrap {display: none;}
				.tab_videoWrap {display: none;}
				@media (max-width:1030px){	
					.videoWrap {display: none;}
					.tab_videoWrap {display: block;}
				}
				@media (max-width:760px){	
					.tab_videoWrap {display: none;}
					.m_videoWrap {display: block;}
				}
			</style>

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

			@media (max-width:1712px){	
				.main-clean-video-bg.pc iframe {
					width: 180vw;
					min-height: 149vh;
				}
			}

			@media (max-width:1570px){	
				.main-clean-video-bg.tab iframe {
					width: 180vw;
					min-height: 149vh;
				}
			}

			@media (max-width:1024px){	
				.main-clean-video-bg.tab iframe {
					width: 110vw;
					min-height: 149vh;
				}
			}

			@media (max-width:800px){	
				.main-clean-video-bg.tab iframe {
					width: 180vw;
					min-height: 160vh;
				}
			}

			@media (max-width:780px){	
				.main-clean-video-bg.mobile iframe {
					width: 100vw;
					min-height: 190vh;
				}
			}

			@media (max-width:600px){	
				.main-clean-video-bg.mobile iframe {
					width: 118vw;
					min-height: 146vh;
				}
			}

			@media (max-width:500px){	
				.main-clean-video-bg.mobile iframe {
					width: 100vw;
					min-height: 136vh;
				}
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
		<div class="txtBox_m">
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
				<div class="graphWrap" style=''>

					 <!-- <div class="cirWrap" style='transform:scale(0.4);transition:transform 3s;opacity:0;'>
					 						<div class="txtCir">
					 							<p>10억명</p>
					 							<img src="/images/finish.png" title="무한" class='finish' style='display:none;'>
					 						</div>
					 					</div>  -->
					<div class="graphBack">
							
						<div class="lastLine2"></div>
						<div class="lastLine"></div>
						<img src="/images/graph.svg" alt="그래프배경" style='width:100%;' id='graphBg'>
					</div>
					<div class="graphLine">

						<svg xmlns="http://www.w3.org/2000/svg" width="1342.121" viewBox="0 0 1342.121 447.35" style='width:100%;overflow: visible'>
							
							<g transform="translate(-206 -2100)">
								<path id="패스_59" fill="#6f8de9" d="M1508.249,2090.427l41.077,8.297l-27.719,31.418l0.886-22.342L1508.249,2090.427z"/>
								<path id="패스_61" fill="none" stroke="#6f8de9" stroke-width="10" stroke-linecap="round" d="M212.218,2524.17l297.845-36.383   l0,0l150.395-50.687l148.91-86.094l303.845-86.109l220.745-95.926l0,0l197.046-64.039l0,0"/>
							</g>
							<g>
								 <!-- <path id="path2" data-name="path2" d="M5.571,425.539l297.844-36.383l0,0  l150.395-50.686l148.91-86.094l303.845-86.11l220.745-95.926l0,0l197.046-64.039l0,0"  fill="none" stroke="#6f8de9" stroke-linecap="round" stroke-width="10"/> -->
								
								 <path id="path" data-name="path"  stroke-dasharray="0,1395" style="stroke-dasharray: 0,1395;" d="M5.571,425.539l297.844-36.383l0,0  l150.395-50.686l148.91-86.094l303.845-86.11l220.745-95.926l0,0l197.046-64.039l0,0"  fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="10"/>

								<!-- <path id="path3" data-name="path3"d="M1083.46,8.41,1124.49,0l-13.23,39.73-7.911-20.9Z" transform="matrix(0.921, 0.391, -0.391, 0.921, 513.671, 1659.048)" fill="#6f8de9"/> -->

							</g>
							<g class='cirWrap' style='transform:scale(0.4); text-align: center;opacity:0;' fill="#DEB37B" stroke-linejoin="round" stroke-linecap="round" fill-rule="evenodd" stroke="#deb27b" stroke-opacity="0.8" stroke-width="2">
								<circle  r="32"/>
								<text x="0" y="0" stroke='none' text-anchor="middle" fill="#ffffff" font-size="2.5rem" dy=".3em" style='display:none;'>10억명</text>
								<path d="M60.43,16.07c3.94-5,7.64-8.94,11.96-11.69C77.16,1.37,82.61-.16,89.86.01h.02c.16,0,.31,0,.43.01a4.189,4.189,0,0,1,.42.02c.71.03,1.36.08,1.95.14h0a33.226,33.226,0,0,1,3.59.57,32.376,32.376,0,0,1,3.39.92,30.766,30.766,0,0,1,13.84,9.26h.01c.68.81,1.33,1.65,1.93,2.52s1.15,1.77,1.65,2.67a30.673,30.673,0,0,1,3.77,15.45v.02c0,.14,0,.26-.01.36a3.443,3.443,0,0,1-.01.36c-.03.56-.06,1.08-.11,1.56v.14a.648.648,0,0,1-.02.2c-.03.24-.06.5-.11.78-.04.26-.08.54-.13.82a37.6,37.6,0,0,1-.97,4.18h0l-.02.06c-.06.2-.14.45-.23.75-.13.4-.21.66-.26.8a32.33,32.33,0,0,1-1.6,3.83h0a32.008,32.008,0,0,1-2.12,3.64A30.216,30.216,0,0,1,93.55,62.2c-7.42,1.07-12.95-.19-17.72-2.8-4.7-2.57-8.57-6.4-12.81-10.6-.56-.55-1.12-1.11-1.71-1.69-.29-.28-.58-.56-.87-.85-.3.29-.59.57-.87.85L57.85,48.8c-4.24,4.2-8.1,8.03-12.81,10.6-4.77,2.61-10.3,3.87-17.72,2.8h0a37.545,37.545,0,0,1-4.44-.92,31.741,31.741,0,0,1-4.12-1.43A29.791,29.791,0,0,1,3.49,45.43h0c-.12-.25-.24-.48-.34-.71-.06-.12-.16-.36-.32-.73a34.3,34.3,0,0,1-1.44-4h0a.45.45,0,0,0-.02-.08c-.08-.28-.15-.53-.21-.74q-.09-.345-.21-.81a37.067,37.067,0,0,1-.78-4.19v-.15H.14V34h0v-.15l-.02-.21a3.094,3.094,0,0,0-.03-.32c-.04-.5-.07-1.08-.08-1.75v-.02a29.581,29.581,0,0,1,.08-3.14A30.723,30.723,0,0,1,7.36,10.92h0Q8.4,9.72,9.55,8.61a31.74,31.74,0,0,1,2.44-2.09A32.006,32.006,0,0,1,28.19.18h.01s.16-.02.36-.04c.33-.03.29-.03.37-.04C29.52.05,30.21.02,31,0c7.25-.18,12.7,1.35,17.46,4.37,4.32,2.74,8.02,6.69,11.96,11.69h0Zm-.9,27.41L71.34,30.72c3.13-4.17,5.81-7.44,8.58-9.68a13.939,13.939,0,0,1,9.52-3.5c.25,0,.47.02.67.03s.46.04.76.07a14.423,14.423,0,0,1,7.24,2.77c.37.28.73.59,1.08.91a13.042,13.042,0,0,1,.96,1.01h0a13.259,13.259,0,0,1,2.95,6.14c.08.45.14.89.18,1.33.03.42.05.86.04,1.33h0v.03a4.117,4.117,0,0,1-.03.51v.16h-.01v.08a.594.594,0,0,1-.01.11.545.545,0,0,1-.05.22,18.118,18.118,0,0,1-.36,2.01c-.02.1-.06.23-.1.39-.02.08-.05.18-.09.32a.073.073,0,0,1-.02.06h0a16.1,16.1,0,0,1-.67,1.84c-.01.03-.07.15-.16.35-.07.15-.12.26-.15.31a.076.076,0,0,1-.02.04h0a12.77,12.77,0,0,1-6.75,6.19,16.436,16.436,0,0,1-1.83.62,16.908,16.908,0,0,1-1.98.4h0a11.844,11.844,0,0,1-8.44-2.11,48.921,48.921,0,0,1-7.24-6.34l-.03-.03c-.95-.94-1.93-1.91-2.96-2.9l-4.1,4.43a62.009,62.009,0,0,0,9.79,8.21c6.91,4.54,15.1,7.11,22.59,2.1a21.164,21.164,0,0,0,5.95-5.9,20.807,20.807,0,0,0,3.46-11.78,20.4,20.4,0,0,0-3.3-11.07,15.816,15.816,0,0,0-4.42-4.47c-10.58-7.06-20.72-3.97-29.66,3.82a60.31,60.31,0,0,0-5.2,5.17c-8,8.95-11.41,16.68-23.01,24.3-7.68,5.05-16.87,7.85-25.49,2.09a23.76,23.76,0,0,1-6.67-6.62,23.362,23.362,0,0,1-3.9-13.26,22.987,22.987,0,0,1,3.74-12.5,18.543,18.543,0,0,1,5.14-5.19c11.81-7.88,23.02-4.53,32.83,4.03a62.509,62.509,0,0,1,5.18,5.13l3.37-3.78c-3.91-4.99-7.51-8.91-11.67-11.54-4.33-2.75-9.32-4.14-15.99-3.97-.65.02-1.29.05-1.93.1-.32.03-.24.02-.34.03-.03,0-.15.01-.33.03h-.01A29.147,29.147,0,0,0,13.58,8.57a26.246,26.246,0,0,0-2.23,1.91,28.38,28.38,0,0,0-2,2.11h0A28.163,28.163,0,0,0,3.07,25.75a28.584,28.584,0,0,0-.37,2.84,25.326,25.326,0,0,0-.08,2.87v.02c.01.54.04,1.08.08,1.62.02.28.01.2.02.28a1.014,1.014,0,0,0,.02.19,1.785,1.785,0,0,1,.02.23v.09a35.424,35.424,0,0,0,.7,3.81c.05.21.12.46.2.76.07.26.13.49.19.69,0,.02.02.05.02.08h0a33.082,33.082,0,0,0,1.32,3.69q.06.15.3.66c.11.23.21.45.31.65h0A27.194,27.194,0,0,0,19.74,57.41a30.758,30.758,0,0,0,3.79,1.31,34.086,34.086,0,0,0,4.12.85h0c6.79.97,11.8-.15,16.1-2.5,4.37-2.39,8.11-6.09,12.21-10.16.57-.57,1.16-1.15,1.74-1.71l1.79-1.73h.01ZM61.36,19.1,49.54,32.35a1.739,1.739,0,0,1-.13.15c-.71.66-1.37,1.31-2.02,1.94-.67.65-1.3,1.28-1.92,1.9a49,49,0,0,1-7.24,6.34,11.844,11.844,0,0,1-8.44,2.11,14.07,14.07,0,0,1-8.53-4.25,12.959,12.959,0,0,1-1.12-1.4,12.484,12.484,0,0,1-.92-1.56h0a16.644,16.644,0,0,1-.78-1.84l-.12-.36c-.03-.08-.05-.17-.08-.27,0-.03-.02-.05-.03-.08h0a18.557,18.557,0,0,1-.46-2.09c-.03-.19-.05-.34-.07-.45s-.03-.2-.04-.28a1.572,1.572,0,0,1-.04-.23c-.02-.23-.04-.38-.04-.45,0-.1-.01-.23-.02-.39a12.949,12.949,0,0,1,1.62-6.58c.21-.38.45-.76.71-1.15.26-.37.53-.73.83-1.08h.01a13.344,13.344,0,0,1,6.14-4.05,14.717,14.717,0,0,1,1.52-.4,15.937,15.937,0,0,1,1.61-.25h0c.38-.04.74-.07,1.06-.09h.38a13.939,13.939,0,0,1,9.52,3.5,49.656,49.656,0,0,1,7.65,8.45l5.01-5.61a57.776,57.776,0,0,0-5.15-5.12C39.52,10.97,29.38,7.88,18.8,14.94a16.216,16.216,0,0,0-4.42,4.47,20.372,20.372,0,0,0-3.3,11.07,20.807,20.807,0,0,0,3.46,11.78,21.3,21.3,0,0,0,5.95,5.9c7.49,5,15.68,2.43,22.59-2.1,10.87-7.14,14.26-14.64,22.5-23.86a62.778,62.778,0,0,1,5.43-5.4c9.81-8.56,21.02-11.91,32.83-4.03a18.677,18.677,0,0,1,5.14,5.19,22.987,22.987,0,0,1,3.74,12.5,23.517,23.517,0,0,1-3.9,13.26,24.026,24.026,0,0,1-6.67,6.62c-8.62,5.75-17.8,2.95-25.49-2.09a63.953,63.953,0,0,1-10.13-8.47l-4.27,4.61c.29.28.58.56.86.84.58.56,1.16,1.14,1.73,1.71,4.1,4.06,7.84,7.77,12.21,10.16,4.3,2.35,9.31,3.48,16.1,2.5a28.581,28.581,0,0,0,17.59-9.02,27.349,27.349,0,0,0,2.33-2.98,28.83,28.83,0,0,0,1.94-3.34h0a27.288,27.288,0,0,0,1.46-3.52c.13-.37.21-.62.25-.74.05-.17.12-.41.21-.7a.142.142,0,0,1,.02-.06h0a35.132,35.132,0,0,0,.9-3.88l.12-.75c.03-.21.06-.43.09-.69v-.09h0V33.7c.05-.46.08-.97.11-1.5,0-.15.01-.26.01-.32,0-.13,0-.25.01-.34v-.02a28.066,28.066,0,0,0-3.45-14.13,26.355,26.355,0,0,0-1.51-2.45,27.324,27.324,0,0,0-1.76-2.29h-.01A28.109,28.109,0,0,0,98.8,4.17a29.035,29.035,0,0,0-3.11-.84,32.609,32.609,0,0,0-3.31-.53h0c-.55-.06-1.15-.1-1.8-.13-.17,0-.3-.01-.39-.01-.15,0-.29,0-.4-.01h-.02C83.1,2.48,78.1,3.88,73.78,6.62,69.39,9.4,65.62,13.6,61.47,18.99a1.742,1.742,0,0,1-.12.14h0Zm28.02,1.05a11.513,11.513,0,0,0-7.81,2.92A48.493,48.493,0,0,0,74.1,31.4q1.6,1.545,3.11,3.05l.03.03a46.717,46.717,0,0,0,6.82,6,9.388,9.388,0,0,0,6.64,1.71h0a14.51,14.51,0,0,0,1.67-.34,12.873,12.873,0,0,0,1.52-.51,10.188,10.188,0,0,0,5.39-4.93h0l.15-.3s.05-.11.13-.3a11.811,11.811,0,0,0,.56-1.52h0s0-.04.01-.05c.02-.06.04-.15.07-.26.02-.07.04-.18.08-.32a15.6,15.6,0,0,0,.33-1.94.22.22,0,0,1,.01-.08.3.3,0,0,1,.02-.1v-.06c.02-.19.03-.31.03-.37v-.02h0a9.931,9.931,0,0,0-.04-1.07c-.03-.36-.08-.71-.14-1.05a10.686,10.686,0,0,0-2.36-4.92h0a9.576,9.576,0,0,0-.76-.8c-.27-.25-.55-.49-.86-.73a11.767,11.767,0,0,0-5.92-2.26c-.22-.02-.44-.04-.68-.06s-.43-.03-.55-.03h0ZM46.76,31.4a48.493,48.493,0,0,0-7.47-8.33,11.513,11.513,0,0,0-7.81-2.92h-.31c-.27.02-.58.05-.92.08h0c-.46.05-.91.12-1.34.21a12.032,12.032,0,0,0-1.25.33,10.8,10.8,0,0,0-4.95,3.25H22.7q-.36.435-.66.87a10.261,10.261,0,0,0-.57.92,10.47,10.47,0,0,0-1.3,5.26,1.771,1.771,0,0,0,.02.26v.17a.607.607,0,0,1,.05.18h0c.02.21.04.35.05.42a3.687,3.687,0,0,0,.06.39,15.591,15.591,0,0,0,.39,1.76h0a.291.291,0,0,1,.02.08c.02.06.04.14.07.22.03.1.07.2.1.3a13.706,13.706,0,0,0,.65,1.53h0a8.792,8.792,0,0,0,.73,1.24,9.407,9.407,0,0,0,.89,1.11,11.464,11.464,0,0,0,6.97,3.43,9.388,9.388,0,0,0,6.64-1.71,47.241,47.241,0,0,0,6.82-6c.64-.63,1.29-1.28,1.94-1.92.4-.39.8-.77,1.2-1.16h0Z" fill="#fff" class='finish' stroke='none' transform="translate(-60 -30)" style='display:none;'/>
							</g>
						</svg>
						<!-- <div id='numTest'></div> -->

					</div>
					<div class="viewWrap dp_f dp_c">
						<div class="smallSquare"></div>
						<span>시청자수 <small class="f16">(억 명)</small></span>
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
	include './footer2_test.php';
?>

	<style>
		.sec04 .sec04Bot .iconW01 {opacity: 1;}
		.sec04 .sec04Bot .iconW02 {opacity: 1;}
		.sec04 .sec04Bot .iconW03 {opacity: 1;}
		.sec04 .sec04Bot .iconW04 {opacity: 1;}
		.sec04 .sec04Bot .iconW05 {opacity: 1;}
	</style>


<?
	include'fullScript2_test.php';
?>


</body>
</html>
<script>
	$(function(){
		a = $("#graphBg").css("height")
		$(".graphWrap").height(a);
		$(window).resize(function(){
			aa = $("#graphBg").css("height")
			$(".graphWrap").height(aa);
		})

	})
</script>
