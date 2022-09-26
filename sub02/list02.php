<div class="port_slickWrap">
	<?						
		$query = "select * from tb_board_list where table_id='table_1657184969' order by reg_date ";
		$result = mysqli_query($dbc,$query);
		while($row = mysqli_fetch_array($result)){
									
			$userfile01 = $row["userfile01"];
			$data05 = $row["data05"];
	?>

		
		<?if($data05){?><a href='<?=$data05?>' target='_blank'><?}?>
		<div class="port_slick" style='background:url(/board/upfile/<?=$userfile01?>) center center no-repeat;background-size: contain; '>
		</div>
		<?if($data05){?></a><?}?>
	<?
		}	
	?>
</div>
<div class="port_slickWrap" style='margin-top:30px;'>
	<?						
		$query = "select * from tb_board_list where table_id='table_1657599360' order by reg_date ";
		$result = mysqli_query($dbc,$query);
		while($row = mysqli_fetch_array($result)){
									
			$userfile01 = $row["userfile01"];
			$data05 = $row["data05"];
	?>


		<?if($data05){?><a href='<?=$data05?>' target='_blank'><?}?>
		<div class="port_slick" style='background-image:url(/board/upfile/<?=$userfile01?>); background-position: center center; background-repeat: no-repeat; background-size: contain; '>
		</div>
		<?if($data05){?></a><?}?>
	<?
		}	
	?>
</div>


<style>
	.port_slickWrap .slick-slide {margin: 0 10px; width: 420px;}
	.port_slick {position: relative; width: 420px; height: 235px; background-color: #000; background-position: center center; background-size: cover; background-repeat:no-repeat;}
	
	.port_slickWrap .slick-next, .port_slickWrap .slick-prev {
		/*
		width: 24px;
		height: 235px;
		*/
		width:32px;
		height:32px;
		padding:30px;
		box-sizing:border-box;
		z-index: 99;
		border:1px solid #fff;
	}

	
	.port_slickWrap .slick-next {
		right: 20px;
	}

	.port_slickWrap .slick-prev {
		left: 20px;
	}
	.port_slickWrap .slick-next:before, .port_slickWrap .slick-prev:before {
		opacity:0;
		/*
		content: "";
		display: block;
		opacity: 1;
		width: 24px;
		height: 235px;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: 24px 45px;
		*/
	}



	.port_slickWrap .slick-next{
		background-image: url("/images/lnr-chevron-right.svg");
		background-repeat: no-repeat;
		background-position: center center;
		background-size: contain;
	}
	.port_slickWrap .slick-next:hover {
		background-image: url("/images/lnr-chevron-right.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
		background-color: #4169E2;
		transition:.2s;
	}
	.port_slickWrap .slick-prev{
		background-image: url("/images/lnr-chevron-left.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
	}
	.port_slickWrap .slick-prev:hover {
		background-image: url("/images/lnr-chevron-left.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
		background-color: #4169E2;
		transition:.2s;
	}
</style>

<script>
		$('.port_slickWrap').slick({ 
			  dots: false,
			  arrows:true,
			  infinite: true,
			  speed: 1000,
			  autoplay: false,
	          //autoplaySpeed : 1000,
			  slidesToShow: 5,
			  slidesToScroll : 1,
			  variableWidth:true,
			  adaptiveHeight : !0,
			  draggable : true, 
			  swipe:true,
			  centerMode: true,
			  centerPadding: "50%",
		});
</script>