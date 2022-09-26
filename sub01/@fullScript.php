<script>
$(document).ready(function() {
	$('#fullpage_sub01').fullpage({
		lockAnchors: true,
		anchors: ['part1', '', '', '', '', '', '', '', ''],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: false,
		navigationPosition: 'right',
		afterLoad: function(anchorLink01, index01){//addClass
         if(index01==1){

		$(".topBtn").hide()

		$('.firstABline').stop().animate({'left':'0'},1000,function(){
			$('.secABline').stop().animate({'right':'0'},1000,function(){
				$('.sblueLine').stop().animate({'width':'100%'},1000,function(){
					$('.secRegtxt').stop().animate({'top':'0','opacity':'1'},700,function(){
						$('.thirdBtxt').stop().animate({'top':'0','opacity':'1'},700,function(){
							$('#fullpage_sub01 .lineBoxWrap .lineBar').stop().animate({'height':'270px'},1000);
						});
					});
				});
			});
		 });


         }
         if(index01==2){
			$(".topBtn").fadeIn()

			$('#fullpage_sub01 .sec02 .lineBar').stop().animate({'height':'100%'},1500);
			$('#fullpage_sub01 .allConleft').stop().animate({'left':'0','opacity':'1'},1000);
			$('#fullpage_sub01 .allConright').stop().animate({'right':'0','opacity':'1'},1000);

         }
         if(index01==3){


			$('#fullpage_sub01 .sec03 .lineBar').delay(100).animate({'height':'20%'},900,function(){
				/* 20220727 도형 배경이 먼저나오고 animation되는 효과를 아래처럼 순차적으로 나오게 수정
				$('#fullpage_sub01 .sec03 .bluFigure .blackTit').stop().animate({'opacity':'1','left':'-220px'},900,function(){
					$('#fullpage_sub01 .sec03 .bluFigure .f2').stop().animate({'opacity':'1'},1000,function(){
						$('#fullpage_sub01 .sec03 .lineBar02').stop().animate({'height':'204px'},800);
					});
				});
				*/
				$('#fullpage_sub01 .sec03 .bluFigure .blueFig01').stop().animate({'opacity':'1'},900,function(){
					$('#fullpage_sub01 .sec03 .bluFigure .blueFig02').stop().animate({'opacity':'1'},1000,function(){
						$('#fullpage_sub01 .sec03 .bluFigure .blueFig03').stop().animate({'opacity':'1'},1200,function(){
							$('#fullpage_sub01 .sec03 .bluFigure .blueFig04').stop().animate({'opacity':'1'},1300,function(){
								$('#fullpage_sub01 .sec03 .lineBar02').stop().animate({'height':'204px'},800);
							});
						});
					});
				});
			 });
		 }
         if(index01==4){

			$('#fullpage_sub01 .miviWrap:nth-child(1) .miviLeft .mvbigBlue').delay(100).animate({'opacity':'1'},900,function(){
				$('.sec04 .miviWrap:nth-child(1) .miviLeft .lineBarWrap .lineBar').stop().animate({'height':'100%'},800,function(){
					$('#fullpage_sub01 .miviWrap:nth-child(1) .miviRight ').stop().animate({'opacity':'1'},900,function(){
						$('#fullpage_sub01 .miviWrap:nth-child(2) .miviLeft .mvbigBlue').stop().animate({'opacity':'1'},900,function(){
							$('.sec04 .miviWrap:nth-child(2) .miviLeft .lineBarWrap .lineBar').stop().animate({'height':'450px'},900,function(){
								$('#fullpage_sub01 .miviWrap:nth-child(2) .miviRight').stop().animate({'opacity':'1'},900);
							});
						});
					});
				});
			 });

         }
         if(index01==5){

			$('#fullpage_sub01 .sec05 .coreVleft .cvbigBlue').stop().animate({'opacity':'1'},900,function(){
				$('#fullpage_sub01 .sec05 .coreVleft .lineBarWrap .lineBar').stop().animate({'height':'500px'},900,function(){
					$('#fullpage_sub01 .sec05 .coreVright').stop().animate({'opacity':'1','right':'0'},900);
				});
			});


         }
         if(index01==6){

			$('#fullpage_sub01 .sec06 .compWrap .whtTit ').stop().animate({'opacity':'1','left':'0'},900);
			$('#fullpage_sub01 .ccCardWrap .ccCard').addClass("turn");


         }
         if(index01==7){



         }
         if(index01==8){



         }
      },
 
      onLeave: function(anchorLink01, index01){//removeClass
         if(index01!=1){

			//1번 효과에 대한 초기화함수

         }
         if(index01!=2){



         }
         if(index01!=3){


         }
         if(index01!=4){


         }
         if(index01!=5){


         }
         if(index01!==6){



         }
         if(index01!==7){



         }
         if(index01!==8){



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
