<script>

$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['', '', '', '', '', ''],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: false,
		navigationPosition: 'right',
		afterLoad: function(anchorLink, index){//addClass
         if(index==1){
		
		var iframe = document.querySelector('iframe');   
		var player = new Vimeo.Player(iframe);    
		player.on('play', function() {
			setTimeout(function() { 
				$('.visualTxt').fadeIn(3000); 
				$('#header').fadeIn(3000); 
			}, 5000);
		});


         }
         if(index==2){

         }
         if(index==3){
				//$('.number').counterUp({
					//delay: 10,
					//time: 2000
				//});
		 }
         if(index==4){
			 
			//$(".sec04Box").fadeIn();
         }
      },
 
      onLeave: function(anchorLink, index){//removeClass
         if(index!=1){
			//1번 효과에 대한 초기화함수
         }
         if(index!=2){

         }
         if(index!=3){

         }
         if(index!=4){
			//$(".sec04Box").delay(1000).fadeOut();
         }
      },
	});

		var footerSection = $('#footer');
		$('.footerSection').html(footerSection);
});

</script>