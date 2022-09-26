<?
	include "/home/crob/www/module/login/head2.php";	

	if(!$type)	$type='write';
?>
<style>
	#header {display: block;}
	.section .s_center {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;}
</style>

<div id="fullpage_sub04">
	<div class="section sec01">
		<?
		include '../header2.php';
		?>
		<div class="pagesideTit poppin bold1">CONTACT</div>
		<div class="mapInfo dp_sb">
			<div class="map">
				<div class="map_cirWrap">
					<div class="map_cir"></div>
				</div>
				<div class="map_point"></div>
			</div>
			<div class="infoTxtBox">
				<p class="mapinfoTit">주식회사 크로브</p>
				<p class="mapSubTit">CROB Co., Ltd</p>
				<p class="addrInfo">서울시 강남구 봉은사로112길 23, 삼성빌딩 1층</p>
				<p class="emailInfo poppin">3m@crob.co.kr</p>
				<p class="engAddr poppin">1F, Samsung Building, 23 Bongeunsa-ro 112-gil, <br>
				Gangnam-gu, Seoul</p>
			</div>
		</div>
	</div>
	<div class="section sec02">
		<div class="s_center">
			<div class="reviewWrap dp_sb">
				<div class="reviewTit dp_f dp_c dp_cc">
					<div class="logo_formWrap dp_f dp_c dp_cc">
						<div class="topline"></div>
						<img src="/images/logo_c_form.svg" alt="크로브">
						<div class="botline"></div>
					</div>
				</div>
					<?
						include 'reviewForm.php';
					?>
			</div>
		</div>
	</div>


<?
	include '../footer3.php';
?>

<?
	include 'fullScript.php';
?>

<style>
@media (max-width:1250px){	
	.submitBtn2 {margin: 40px auto 0 !important;}
}

@media (max-width:1070px){	
	.reviewFormWrap input, .reviewFormWrap textarea {width: 100%; padding: 10px 15px;}
	.submitBtn2 {padding: 0 20px; height: 50px; width: 240px;}
	.submitBtn2 a {padding: 0 20px;}
	.submitBtn2 .submitTxt {padding: 0 20px;}
	.reviewFormWrap .mb20 {margin-bottom: 10px;}
	.reviewFormWrap textarea {height: 150px;}
	.submitBtn2 .submitTxt span {font-size: 1rem;}
}
</style>

</body>
</html>


