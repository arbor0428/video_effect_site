<script>
$(document).ready(function() {
	$('#fullpage_sub02').fullpage({
		lockAnchors: true,
		anchors: ['part1', '', '',''],
		sectionsColor: ['', '', ''],
		navigation: false,
		navigationPosition: 'right',
		afterLoad: function(anchorLink02, index02){//addClass
			 if(index02==1){
				$(".topBtn").hide()
				$('#fullpage_sub02 .worksWrap .workTopTxt').stop().animate({'opacity':'1'},1500,function(){
					$('#fullpage_sub02 .worksWrap .workBotTxt').stop().animate({'opacity':'1'},900);
					$('#fullpage_sub02 .worksWrap .worksRight').stop().animate({'opacity':'1'},900);
					$('.number').counterUp({
						delay: 10,
						time: 2000
					});

					setTimeout(function() { 
						$('#fullpage_sub02 .worksWrap .worksRight .arrowCir').removeClass('on');
					}, 2580);

				});

			 }
			 if(index02==2){
				$(".topBtn").fadeIn()
			 }
			 if(index02==3){

			 }
		  },
	 
		  onLeave: function(anchorLink02, index02){//removeClass
			 if(index02!=1){

				//1번 효과에 대한 초기화함수

			 }
			 if(index02!=2){



			 }
			 if(index02!==3){

			 }
		  },
		});
		var footerSection = $('#footer');
		$('.footerSection').html(footerSection);

		$(document).on('click', '.topBtn', function () {
			$.fn.fullpage.moveTo('part1', 1);
			return false;
		});
});

</script>