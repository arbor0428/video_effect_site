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
				<div class="iconWrap iconW01">
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
				<div class="iconWrap iconW02">
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
				<div class="iconWrap iconW03">
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
				<div class="iconWrap iconW04">
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
				<div class="iconWrap iconW05">
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

<style>
	.section {height: 100vh;}
</style>

<script>
$(function(){
	$('.iconW01').stop().animate({'opacity':1},800,function(){
		$('.iconW02').stop().animate({'opacity':1},800,function(){
			$('.iconW03').stop().animate({'opacity':1},800,function(){
				$('.iconW04').stop().animate({'opacity':1},800,function(){
					$('.iconW05').stop().animate({'opacity':1},800);
				});
			});
		});
	 });
});
</script>

<?
	include './footer2.php';
?>
