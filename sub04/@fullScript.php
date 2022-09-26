<script>
$(document).ready(function() {
	$('#fullpage_sub04').fullpage({
		lockAnchors: true,
		anchors: ['part1', '', ''],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: false,
		navigationPosition: 'right',
		afterLoad: function(anchorLink04, index04){//addClass
			 if(index04==1){
				 $(".topBtn").hide()
				$('#fullpage_sub04 .mapInfo .map_cirWrap').delay(300).animate({'opacity':'1'},500,function(){
					$('#fullpage_sub04 .mapInfo .map_point').delay(500).addClass('show');
				});

			 }
			 if(index04==2){
				 	$(".topBtn").fadeIn()
					$('#fullpage_sub04 .reviewTit .topline').stop().animate({'width':'100%'},800);
					$('#fullpage_sub04 .reviewTit .botline').stop().animate({'width':'100%'},800);
			 }
		  },
	 
		  onLeave: function(anchorLink04, index04){//removeClass
			 if(index04!=1){

				//1번 효과에 대한 초기화함수

			 }
			 if(index04!=2){



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