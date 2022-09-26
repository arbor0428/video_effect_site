<script>


	$(document).ready(function() {
		
				i=0;
		$('#fullpage2').fullpage({
			lockAnchors: true,
			anchors: ['part1', '', '', '', '', ''],
			sectionsColor: ['', '', ''],
			responsive: 768,
			responsiveWidth: 768,
			navigation: false,
			navigationPosition: 'right',
			afterLoad: function(anchorLink2, index2){//addClass
			 if(index2==1){
				 
				$(".topBtn").hide()
				var iframe = document.querySelector('iframe');   
				var player = new Vimeo.Player(iframe);    
				player.on('play', function() {
					setTimeout(function() { 
						$('.visualTxt').fadeIn(3000); 
						$('#header').fadeIn(3000); 
					}, 5000);
				});

			 }
			 if(index2==2){

				index2Effect();

			 }
			 if(index2==3){
				 i++;
				 if(i==1){
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
							$('.sec03 .lastLine2').css("transition","all .5s").css("height","77%");
						}
					}
					var stop = setInterval(function(){
						counterUp()
					},1)
							
					//그래프 이동
					$(".cirWrap").addClass("motion");
					$('.firstShow').delay(5000).fadeOut(500)						
					$('.englishTxt').delay(5500).fadeIn(500).delay(1500).fadeOut(500)
					$('.koreanTxt').delay(8000).fadeIn(500)

					var stop2 = setTimeout(function() { 
						$(".cirWrap").addClass("motion2");
						$('.sec03 .lastLine2').css("opacity","0.3");


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
								$('.sec03 .lastLine').css("transition","all .5s").css("height","100%");
								
								$('body').off('scroll touchmove mousewheel');
								
								$(".topBtn").fadeIn()
							}
						}
						//.sec03 .lastLine
						var stop = setInterval(function(){
							counterUp()
						},1)

					}, 10000);
				 }
				
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
				$(".topBtn").fadeIn()
			 }
			 if(index2!=2){

				stop2Effect();

			 }
			 if(index2!=3){
				//$("#sec03").stop().load('./graph2.php?jQueryLoad=1');
				
			 }
			 if(index2!=4){


			 }
			 if(index2!=5 && index2!=6){

				stop5Effect();

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




	//////실행함수

	//두번째 페이지
	function index2Effect	(){
		$('.bigTxt').css({'transform':'scale(1)', 'transition':'0.8s ease-in-out'});
		$('.bigTxt').stop().animate({'top':0},500,function(){
			$('.secondTxt').stop().animate({'opacity':1,'transform':'scale(1)'},800,function(){
				$('.thirdTxt').stop().animate({'opacity':1,'transform':'scale(1)'},800,function(){
					$('.lineBar').stop().animate({'height':'491px'},1500);
					$('.smalltxtBox p').stop().animate({'opacity':1},800);
				});
			});
		 });
	}

	//네번째 페이지
	function index4Effect	(){
		var iconImg01 = new Vivus('bestIcon', {type: 'delayed', duration: 150, start: 'autostart', dashGap: 20, forceRender: false})
		var iconImg02 = new Vivus('growthIcon', {type: 'delayed', duration: 150, start: 'autostart', dashGap: 20, forceRender: false})
		var iconImg03 = new Vivus('challIcon', {type: 'delayed', duration: 150, start: 'autostart', dashGap: 20, forceRender: false})
		var iconImg04 = new Vivus('posiIcon', {type: 'delayed', duration: 150, start: 'autostart', dashGap: 20, forceRender: false})
		var iconImg05 = new Vivus('loveIcon', {type: 'delayed', duration: 150, start: 'autostart', dashGap: 20, forceRender: false})
	}

	//다섯번째 페이지
	function index5Effect	(){
		
		$('.sec05subT').addClass('active');
		//$('.sec05subT').css({'transform':'scale(1)', 'transition':'1s ease-in-out'});
		$('.sec05 .lineBar').delay(800).animate({'height':'204px'},800,function(){
			$('.barTxtBox').stop().animate({'opacity':1},1000,function(){
				$('.contactBtn').stop().animate({'opacity':1},1000);
			});
		 });
	}




	//////리셋함수

	//두번째 페이지
	function stop2Effect(){
		// $('.bigTxt').stop();
		 $('.secondTxt').stop();
		 $('.thirdTxt').stop();
		 $('.lineBar').stop();
		 $('.smalltxtBox p').stop();
		$('.bigTxt').css({'transform':'scale(3)'});
		//$('.bigTxt').css({'top':'15%','font-size':'12rem','position':'absolute'});
		//$('.bigTxt').css({'top':'15%','position':'absolute'});
		$('.secondTxt').css({'opacity':0,'transform':'scale(1.1)'});
		$('.thirdTxt').css({'opacity':0,'transform':'scale(1.1)'});
		$('.lineBar').css({'height':0});
		$('.smalltxtBox p').css({'opacity':0});
	}

	//다섯번째 페이지
	function stop5Effect	(){
				 //$('.sec05subT').css({'transform':'scale(3)'});
		$('.sec05subT').removeClass('active');
		
		 $('.sec05subT').stop();

		 $('.sec05 .lineBar').stop();
		 $('.barTxtBox').stop();
		 $('.contactBtn').stop();
		$('.sec05 .lineBar').css({'height':'0px'});
		$('.barTxtBox').css({'opacity':0});
		$('.contactBtn').css({'opacity':0});
	}

</script>