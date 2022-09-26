<?
	include "/home/crob/www/module/login/head.php";	

	if(!$type)	$type='write';
?>

<style>
	#header {display: block;}
	.section .s_center {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;}

	#fullpage_sub04 .pagesideTit {
		position: absolute;
		top: 34%;
		left: -135px;
		transform: rotate(90deg);
		font-size: 4.75rem;
		color: #DDDDDD;
	}

	#fullpage_sub04 .mapInfo {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 1440px;
	}

	#fullpage_sub04 .infoTxtBox {
		border-top: 1px solid #4169E2;
		padding-top: 40px;
		width: 540px;
	}

	#fullpage_sub04 .infoTxtBox .mapinfoTit {
		margin-bottom: 10px;
		font-size: 3.5rem;
		font-weight: 600;
	}

	#fullpage_sub04 .infoTxtBox .mapSubTit {
		margin-bottom: 40px;
		font-size: 2.125rem;
		font-weight: 500;
	}

	#fullpage_sub04 .infoTxtBox .addrInfo {
		margin-bottom: 13px;
		font-size: 1.5rem;
	}

	#fullpage_sub04 .infoTxtBox .emailInfo {
		margin-bottom: 30px;
		font-size: 1.125rem;
		color: #707070;
	}

	#fullpage_sub04 .infoTxtBox .engAddr {
		font-size: 1.125rem;
		color: #707070;
		line-height: 24px;
	}

	#fullpage_sub04 .reviewWrap {
		margin: 0 auto;
		width: 1440px;
	}

	#fullpage_sub04 .reviewTit {
		width: calc(100% - 540px);
	}


</style>

<div id="fullpage_sub04">
	<div class="section sec01">
		<?
		include '../header.php';
		?>
		<div class="pagesideTit poppin bold1">CONTACT</div>
		<div class="mapInfo dp_sb">
			<div class="map">
				<img src="/images/map_img.png" alt="map">
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
					<img src="/images/logo_c_gold.svg" alt="크로브">
				</div>
					<?
						include 'reviewForm.php';
					?>
			</div>
		</div>
	</div>


<?
	include '../footer.php';
?>

<script>
$(document).ready(function() {
	$('#fullpage_sub04').fullpage({
		anchors: ['sec01', 'sec02'],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: false,
		navigationPosition: 'right',
});
		var footerSection = $('#footer');
		$('.footerSection').html(footerSection);
});

</script>