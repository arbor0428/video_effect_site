<?
	include "/home/crob/www/module/login/head2.php";	
	include "/home/crob/www/module/class/class.DbCon.php";	
?>
<link rel="stylesheet" type="text/css" href="/css/sub.css?v=3">
<style>
	#header {display: block;}

	.section .s_center {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;}
	.section .sec_tit {margin: 0 auto 90px; width: 1440px; font-size: 4.75rem; color: #4169E2;}
</style>

<div id="fullpage_sub02">
	<div class="section sec01">
		<?
			include '../header2.php';
		?>
		<div class="pagesideTit poppin bold1">WORKS</div>
		<div class="s_center">
			<div class="worksWrap dp_sb dp_c">
				<div class="worksLeft">
					<div class="workTopTxt">
						<p class="topTxt01">
							최고의 콘텐츠 전문가 집단 <span class="blue bold2">크로브</span>
						</p>
						<p class="topTxt02">
							전 세계 인구 7명중 1명은<br>
							<span class="bold2">이미 크로브 콘텐츠 시청자입니다.</span>
						</p>
					</div>
					<div class="workBotTxt">
						<p>크로브는 다년간 축척한 독자적인 노하우를 기반으로<br>
						최고의 콘텐츠 제작 시스템을 구축하였습니다.</p>
						<p>이를 통해 사회, 과학, 문화, 예술 등의 다양한 분야에서 폭넓은 콘텐츠를 제작해왔으며<br>
						시청자수 10억명 이상의 경이로운 성과를 달성하였습니다.</p>
					</div>
				</div>
				<div class="worksRight">
					<div class="arrowCir on"></div>
					<div class="arrowInTxt">
						<div class="arrowTxtBox">
							<p class="arrTit bold1">콘텐츠 수</p>
							<p class="arrNumBlue bold1 dp_f dp_c dp_cc"><span class="poppin number ctNm" data-count="1000">1,000</span><span>개</span></p>
						</div>
						<div class="arrowTxtBox">
							<p class="arrTit bold1">시청자 수</p>
							<p class="arrNumBlue bold1 dp_f dp_c dp_cc"><span class="poppin number visiNm" data-count="1000000000">1,000,000,000</span><span>명</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section sec02">
		<div class="s_center">
			<p class="sec_tit">Category</p>
			<?
				include 'list01.php';
			?>
		</div>
	</div>
	<div class="section">
		<div class="s_center">
			<p class="sec_tit">Portfolio</p>
			<?
				include 'list02.php';
			?>
		</div>
	</div>


<?
	include '../footer2.php';
?>

<?
	include 'fullScript.php';
?>

</body>
</html>

