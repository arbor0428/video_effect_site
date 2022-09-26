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
?>

<?
	include './ks_popset.php';
	include './visit.php';
?>

<?
include 'header2.php';
?>
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
							<a href="" title="">
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
					<a class="menuTxt poppin" data-text="About" href="" title="">About
					</a>
				</div>
				<div class="sec05Menu">
					<a class="menuTxt poppin" data-text="Works" href="" title="">Works
					</a>
				</div>
				<div class="sec05Menu">
					<a class="menuTxt poppin" data-text="News" href="" title="">News
					</a>
				</div>
				<div class="sec05Menu">
					<a class="menuTxt poppin" data-text="Contact" href="" title="">Contact
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.section {
		height: 100vh;
	}

	.sec05 .lineBar {
		position: absolute;
		top: 130px;
		left: 0;
		width: 2px;
		height: 0;
		background-color: #4169E2;
	}

	.sec05 .sec05Top .afterShow .topLine::after {
		display: none;
		
	}

</style>

<script>
$(function(){
		$('.sec05subT').delay(500).addClass('active');

		$('.lineBar').stop().animate({'height':'204px'},1500);
		$('.barTxtBox').stop().animate({'opacity':1},1500);
		$('.contactBtn').stop().animate({'opacity':1},1500);

});
</script>
