<?
	include "/home/crob/www/module/login/head.php";	
	include "/home/crob/www/module/class/class.DbCon.php";	
?>

<style>
	#header {display: block;}

	.sec01 {background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: url("/images/works_top.jpg")}
	.section .s_center {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;}
	.section .sec_tit {margin: 0 auto 90px; width: 1440px; font-size: 4.75rem; color: #4169E2;}
</style>

<div id="fullpage_sub02">
	<div class="section sec01">
		<?
			include '../header.php';
		?>
	</div>
	<div class="section sec02">
		<div class="s_center">
			<p class="sec_tit">Category</p>
			<?
				include 'list01.php';
			?>
		</div>
	</div>
	<div class="section sec03">
		<div class="s_center">
			<p class="sec_tit">Portfolio</p>
			<?
				include 'list02.php';
			?>
		</div>
	</div>


<?
	include '../footer.php';
?>

<script>
$(document).ready(function() {
	$('#fullpage_sub02').fullpage({
		anchors: ['sec01', 'sec02', 'sec03'],
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