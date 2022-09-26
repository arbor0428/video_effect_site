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
			<div class="videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg">
					<iframe src="https://player.vimeo.com/video/726922955?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="0621 크로브 로딩 페이지 1.mp4" data-ready="true"></iframe>
				</div>
				<div style='width:100%;height:100%;position:absolute;top:0;left:0;'></div>
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<div class="m_videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg">
					<iframe src="https://player.vimeo.com/video/742159690?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen  title="0822 크로브 모바일.mp4"></iframe>
				</div>
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<div class="tab_videoWrap" style="position:relative; width: 100%; height: 100%; overflow: hidden;">
				<div class="main-clean-video-bg">
					<iframe src="https://player.vimeo.com/video/742161020?autopause=0&amp;transparent=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen  title="0822 크로브 모바일.mp4"></iframe>
				</div>
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<style>
				.m_videoWrap {display: none;}
				.tab_videoWrap {display: none;}
				@media (max-width:1250px){	
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

			@media (max-width:1570px){	
				.main-clean-video-bg  iframe {
					width: 180vw;
					min-height: 125vh;
				}
			}

			@media (max-width:1200px){	
				.main-clean-video-bg  iframe {
					width: 21vw;
					min-height: 129vh;
					top: 46%;
				}
			}

		</style>
	</div>

<?
	include'fullScript2_test.php';
?>


</body>
</html>