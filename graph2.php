<?
//if($_GET['jQueryLoad']){
	include "/home/crob/www/module/login/head2.php";	
//}
?>

<style>
	html,body{height:100%;}
</style>
<div class="sec03" style='width:100%;height:100%;'>
	<div class="c_center">
		<div class="sec03Wrap">
			<div id="unique-id" class="upsideChn">
				<div class="firstShow">
					<span class="numBox poppin number" data-count="1000000000">1,000,000,000</span>
					명
				</div>
				<div class="englishTxt">
					<span>We are proved</span>
				</div>
				<div class="koreanTxt">
					<span>이것은 시작일 뿐입니다.</span>
				</div>
			</div>
			<div class="graphWrap">

				<div class="cirWrap" style='transform:scale(0.4);transition:transform 3s;opacity:0;'>
					<div class="txtCir">
						<p>10억명</p>
						<img src="/images/finish.png" title="무한" class='finish' style='display:none;'>
					</div>
				</div>
				<div class="lastLine2"></div>
				<div class="lastLine"></div>
				<div class="graphLine">

					<svg xmlns="http://www.w3.org/2000/svg" width="1342.121" height="447.35" viewBox="0 0 1342.121 447.35">
					  <g id="arrow" transform="translate(-206.648 -2082.389)">
						 <path id="path2" data-name="path2" d="M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0" transform="translate(-4905.212 -10690.509)" fill="none" stroke="#6f8de9" stroke-linecap="round" stroke-width="10"/>
						
						 <path id="path" data-name="path"  stroke-dasharray="0,1395" style="stroke-dasharray: 0,1395;" d="M5117.43,13214.679l297.844-36.383h0l150.395-50.687,148.909-86.094,303.845-86.109,220.745-95.926h0l197.046-64.039h0" transform="translate(-4905.212 -10690.509)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="10"/>


						<path id="path3" data-name="path3"d="M1083.46,8.41,1124.49,0l-13.23,39.73-7.911-20.9Z" transform="matrix(0.921, 0.391, -0.391, 0.921, 513.671, 1659.048)" fill="#6f8de9"/>
						
					  </g>
					</svg>
					<!-- <div id='numTest'></div> -->

				</div>
				<div class="graphBack">
					<img src="/images/graph.svg" alt="그래프배경">
				</div>
				<div class="viewWrap dp_f dp_c">
					<div class="smallSquare"></div>
					<span>시청자수</span>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	var stop;
	var stop2;
	window.clearTimeout(stop2)
	window.clearInterval(stop)

	$(document).ready(function() {
		//$('#sec03').load(location.href+' #sec03');
					
					
		$('.number').attr("data-count","1000000000");
		$('.number').text("1,000,000,000");
		$('.number').counterUp({
			delay: 10,
			time: 1990
		});
			
		var countOne = 0
		//그래프 이동
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
		stop = setInterval(function(){
			var countOne = 0
			counterUp()
		},1)
				
		//그래프 이동
		$(".cirWrap").addClass("motion");
		$('.firstShow').delay(5000).fadeOut(500)						
		$('.englishTxt').delay(5500).fadeIn(500).delay(1500).fadeOut(500)
		$('.koreanTxt').delay(8000).fadeIn(500)

		stop2 = setTimeout(function() { 
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
					
					/*
					$('body').off('scroll touchmove mousewheel');
					$(".topBtn").fadeIn()
					*/
				}
			}
			//.sec03 .lastLine
			stop = setInterval(function(){
				counterUp()
			},1)

		}, 10000);
	});
</script>