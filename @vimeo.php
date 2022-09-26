<div class='test' style='background:red;'>

</div>


			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.11.3.js"></script>	
			
			<script src="/js/jquery.easing.min.js"></script>
<style>
	.test{width:0px;height:100%;background:red;position:absolute;left:50%;transition:all 0.3s ease-in;transition-delay:0.5s;}
</style>
<script>
$(function(){
	$(".test").css("width","100%").css("left","0");
})
</script>