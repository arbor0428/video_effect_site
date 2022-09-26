<div class="cate_slickWrap">
	<?						
		$query = "select * from tb_board_list where table_id='table_1657175018' order by reg_date ";
		$result = mysqli_query($dbc,$query);
		while($row = mysqli_fetch_array($result)){
									
			$userfile01 = $row["userfile01"];
	?>


		<div class="cate_slick cate_slick01" style='background-image:url(/board/upfile/<?=$userfile01?>); background-position: center center; background-repeat: no-repeat; background-size: cover; '>
				<div class="cateBlack"></div>
		</div>
	<?
		}	
	?>
</div>

<style>
	.cate_slickWrap .slick-slide {margin: 0 10px; width: 420px;}
	.cate_slick {position: relative; width: 420px; height: 420px; }
	.cate_slick .cateBlack {position: absolute; width: 100%; height: 100%;}
	.cate_slick .cate_tit {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 2.5rem; color: #fff; font-weight: 500; letter-spacing: 10px;}
	.cate_slickWrap .slick-next, .cate_slickWrap .slick-prev {
		/*
		width: 24px;
		height: 420px;
		*/
		
		width:32px;
		height:32px;
		padding:30px;
		box-sizing:border-box;
		z-index: 99;
		border:1px solid #fff;
	}

	.cate_slickWrap .slick-next {
		right: 20px;
	}

	.cate_slickWrap .slick-prev {
		left: 20px;
	}

	.cate_slickWrap .slick-next:before, .cate_slickWrap .slick-prev:before {
		opacity:0;
		/*
		content: "";
		display: block;
		opacity: 1;
		width: 24px;
		height: 420px;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: 24px 45px;
		*/
	}


	.cate_slickWrap .slick-next{
		background-image: url("/images/lnr-chevron-right.svg");
		background-repeat: no-repeat;
		background-position: center center;
		background-size: contain;
	}
	.cate_slickWrap .slick-next:hover {
		background-image: url("/images/lnr-chevron-right.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
		background-color: #4169E2;
		transition:.2s;
	}
	.cate_slickWrap .slick-prev{
		background-image: url("/images/lnr-chevron-left.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
	}
	.cate_slickWrap .slick-prev:hover {
		background-image: url("/images/lnr-chevron-left.svg");
		background-repeat: no-repeat;
		background-position:center center;
		background-size: contain;
		background-color: #4169E2;
		transition:.2s;
	}


</style>

<script>
		$('.cate_slickWrap').slick({ 
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
		});
</script>