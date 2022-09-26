<?
	include "/home/crob/www/module/login/head.php";	
?>

<style>
	#header {display: block;}

	.section {background-position: center center; background-repeat: no-repeat; background-size: cover;}
	.sec01 {background-image: url("/images/sec_about1.jpg")}
	.sec02 {background-image: url("/images/sec_about2.jpg")}
	.sec03 {background-image: url("/images/sec_about3.jpg")}
	.sec04 {background-image: url("/images/sec_about4.jpg")}
	.sec05 {background-image: url("/images/sec_about5.jpg")}
	.sec06 {background-image: url("/images/sec_about6.jpg")}
	.sec07 {background-image: url("/images/sec_about7.jpg")}
	.sec08 {background-image: url("/images/sec_about8.jpg")}
</style>

<div id="fullpage_sub01">
	<div class="section sec01">
		<?
		include '../header.php';
		?>
	</div>
	<div class="section sec02">
	</div>
	<div class="section sec03">
	</div>
	<div class="section sec04">
	</div>
	<div class="section sec05">
	</div>
	<div class="section sec06">
	</div>
	<div class="section sec07">
	</div>
	<div class="section sec08">
	</div>


<?
	include '../footer.php';
?>

<script>
$(document).ready(function() {
	$('#fullpage_sub01').fullpage({
		anchors: ['sec01', 'sec02', 'sec03', 'sec04', 'sec05', 'sec06', 'sec07', 'sec08'],
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


