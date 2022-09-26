<?
session_cache_limiter('');
session_start();
Header("p3p: CP=\"CAO DSP AND SO ON\" policyref=\"/w3c/p3p.xml\"");

//글로벌 변수 설정
$GBL_USERID	= strtolower($_SESSION['ses_member_id']);
$GBL_NAME	= $_SESSION['ses_member_name'];
$GBL_MTYPE = $_SESSION['ses_member_type'];
$GBL_PASSWORD = $_SESSION['ses_member_pwd'];

$SYSTEM_DATE = date('Y-m-d');

$strRoot = '../';
$boardRoot = '../board/';

?>

<!doctype html>
	<html lang="ko">
		<head>


			<?
				include "/home/crob/www/module/login/metaTag.php";
			?>
			

			<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
			<link rel="stylesheet" type="text/css" href="/css/style2.css?v=6">
			<link rel="stylesheet" type="text/css" href="/css/sub.css?v=3">
<!-- 			<link rel="stylesheet" type="text/css" href="/css/mediaquery.css?v=1"> -->

			
			<!--<link rel="stylesheet" type="text/css" href="/css/sub02.css">-->
			
			<link rel="stylesheet" type="text/css" href="/css/board.css?v=7">
			<link rel="stylesheet" type="text/css" href="/css/font.css?v=5">
			<link rel="stylesheet" type="text/css" href="/css/animation.css?v=8">



			<!-- poppin-->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

			<link rel="stylesheet" type="text/css" href="/module/popupoverlay/popupoverlay.css">
			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.11.3.js"></script>	
			<script src="/module/js/common.js"></script>
			<script src="/module/popupoverlay/jquery.popupoverlay.js"></script>
			<script src="/js/jquery.easing.min.js"></script>
			<script src="/js/script.js"></script>
			
			<!-- aos -->
			<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			
			<!-- font awesome
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
			-->
			<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">


			<!-- Swiper-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css"/> 
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>

			<!-- slick 불러오기 -->
			<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
			<script src="/js/slick.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
			
			<!-- fullpage 불러오기 -->
			<link rel="stylesheet" type="text/css" href="/js/fullPage.css">
			<script src="/js/fullPage.js"></script>

			<!-- gsap 불러오기 -->
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

			<!-- countUp 불러오기 -->
			<script type="text/javascript" src="/js/jquery.counterup.min.js"></script>
			<script type="text/javascript" src="/js/waypoints.min.js"></script>
			<script type="text/javascript" src="/js/move.js"></script>

			<script src="/js/vivus.js"></script>
			

			<title>(주)크로브ㅣCROB</title>

		</head>
	<body>