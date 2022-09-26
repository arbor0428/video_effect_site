<script>

$(document).ready(function() {
	$('#fullpage2').fullpage({
		anchors: ['', '', '', '', '', ''],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: false,
		navigationPosition: 'right',
		afterLoad: function(anchorLink2, index2){//addClass
         if(index2==1){


         }
         if(index2==2){

			index2Effect();

         }
         if(index2==3){

			$('.number').counterUp({
				delay: 10,
				time: 1990
			});
				
			//그래프 이동
			var countOne = 0
			function counterUp(){
				$("#path").css("stroke-dasharray",countOne+",1395");
				$("#numTest").text(countOne);
				countOne=countOne+1.5;
				if(countOne >= 940){
					clearInterval(stop)
					$(".txtCir p").delay(300).fadeIn();
					
				}
			}
			var stop = setInterval(function(){
				counterUp()
			},1)
			//그래프 이동
			$(".cirWrap").addClass("motion");

			setTimeout(function() { 
				$(".cirWrap").addClass("motion2");


				//그래프 이동
				var countOne2 = 940
				function counterUp(){
					$("#path").css("stroke-dasharray",countOne2+",1395");
					$("#numTest").text(countOne2);
					countOne2=countOne2+0.7;
					if(countOne2 >= 1395){
						clearInterval(stop)
						$(".txtCir p").fadeOut();
						$(".finish").delay(300).fadeIn();
					}
				}
				var stop = setInterval(function(){
					counterUp()
				},1)

			}, 6000);

		 }
         if(index2==4){

			 index4Effect();

         }
         if(index2==5){

			index5Effect();

         }
      },
 
      onLeave: function(anchorLink2, index2){//removeClass
         if(index2!=1){

			//1번 효과에 대한 초기화함수

         }
         if(index2!=2){

			//$(".bigTxt").css({"position":"absolute"});

			//$(".bigTxt").css({"top":"15%","font-size":"12rem"});
			//$(".secondTxt").css({"opacity":0,"transform":"scale(1.1)"});
			//$(".thirdTxt").css({"opacity":0,"transform":"scale(1.1)"});
			//$(".lineBar").css({"height":0});
			//$(".smalltxtBox p").css({"opacity":0});

         }
         if(index2!=3){
			//그래프 이동
			clearInterval(stop)
				
			var countOne = 0
			$(".finish").fadeOut();
			$(".cirWrap").removeClass("motion");
			$(".cirWrap").removeClass("motion2");

         }
         if(index2!=4){


         }
         if(index2!=5){

			$('.sec05subT').removeClass('active');
			$('.lineBar').css({'height':'0px'});
			$('.barTxtBox').css({'opacity':0});
			$('.contactBtn').css({'opacity':0});

         }
      },
	});

		var footerSection = $('#footer');
		$('.footerSection').html(footerSection);
});


function index2Effect	(){
	$('.bigTxt').css({'position':'relative'});
	$('.bigTxt').stop().animate({'font-size':'3.875rem','top':0},1000,function(){
		$('.secondTxt').stop().animate({'opacity':1,'transform':'scale(1)'},800,function(){
			$('.thirdTxt').stop().animate({'opacity':1,'transform':'scale(1)'},800,function(){
				$('.lineBar').stop().animate({'height':'491px'},1500);
				$('.smalltxtBox p').stop().animate({'opacity':1},800);
			});
		});
	 });
}

function index4Effect	(){

	var iconImg01 = new Vivus('bestIcon', {type: 'delayed', duration: 200, start: 'autostart', dashGap: 20, forceRender: false})
	var iconImg02 = new Vivus('growthIcon', {type: 'delayed', duration: 200, start: 'autostart', dashGap: 20, forceRender: false})
	var iconImg03 = new Vivus('challIcon', {type: 'delayed', duration: 400, start: 'autostart', dashGap: 20, forceRender: false})
	var iconImg04 = new Vivus('posiIcon', {type: 'delayed', duration: 600, start: 'autostart', dashGap: 20, forceRender: false})
	var iconImg05 = new Vivus('loveIcon', {type: 'delayed', duration: 800, start: 'autostart', dashGap: 20, forceRender: false})

	$('.iconW01').stop().animate({'opacity':1},500,function(){
		$('.iconW02').stop().animate({'opacity':1},500,function(){
			$('.iconW03').stop().animate({'opacity':1},500,function(){
				$('.iconW04').stop().animate({'opacity':1},500,function(){
					$('.iconW05').stop().animate({'opacity':1},500);
				});
			});
		});
	 });

}

function index5Effect	(){
	$('.sec05subT').delay(500).addClass('active');

	$('.lineBar').stop().animate({'height':'204px'},1500,function(){
		$('.barTxtBox').stop().animate({'opacity':1},1000,function(){
			$('.contactBtn').stop().animate({'opacity':1},1000);
		});
	 });
}
</script>