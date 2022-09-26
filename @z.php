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


<script>

	$('.number').counterUp({
		delay: 0,
		time: 3000
	});
		
	//그래프 이동
	var countOne = 0
	function counterUp(){
		$("#path").css("stroke-dasharray",countOne+",1395");
		$("#numTest").text(countOne);
		$("#numTest2").text($("#motion").offset().top+'/'+$("#motion").offset().left);
		motion
		countOne=countOne+1.5;
		if(countOne >= 940){
			clearInterval(stop)
		}
	}
	var stop = setInterval(function(){
		counterUp()
	},1)
	//그래프 이동

</script>

<div class="section sec03" style='height:1080px;'>
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

					<div class="cirWrap"  id='motion'>
						<div class="txtCir">
							<p>10억명</p>
							<img src="/images/finish.png" title="무한">
						</div>
					</div>
					<style>
					#motion {
					  offset-path: path("M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0");
					  offset-rotate: 0deg;
					  animation: move 2750ms linear forwards  ;position:absolute;top:-12930px;left:-5080px;;
					}

					@keyframes move {
					  0% {
						offset-distance: 00%;
					  }
					  100% {
						offset-distance: 70%;
					  }
					}
					</style>

					<div class="lastLine"></div>
					<div class="graphLine">
						<svg xmlns="http://www.w3.org/2000/svg" width="1330" height="430" viewBox="0 0 1330 430">
							<path id="path" data-name="path" stroke-dasharray="0,1395" style="stroke-dasharray: 0,1395;"d="M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0" transform="translate(-5111 -12789)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="10"/>
						</svg>
						<div id='numTest'></div>
						<div id='numTest2'></div>

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