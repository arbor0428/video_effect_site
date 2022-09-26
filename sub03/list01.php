<div class="boardCont">
	<div class="contList">
		<a class="dp_f dp_cc" href="" title="" style="width: 100%; height: 100%;">
			<div class="contListImg">
				<!--사진 배경으로-->
			</div>
			<div class="contListTxt">
				<p class="contListTit">이 곳은 게시물 제목이 들어가는 곳입니다</p>
				<p class="contListDet">이 곳은 게시물 간단한 설명이 들어가는 곳입니다.</p>
				<p class="contListDate">2022.06.24</p>
			</div>
		</a>
	</div>

	<div class="contList dp_f dp_cc">
		<a class="dp_f dp_cc" href="" title="" style="width: 100%; height: 100%;">
			<div class="contListImg">
				<!--사진 배경으로-->
			</div>
			<div class="contListTxt">
				<p class="contListTit">이 곳은 게시물 제목이 들어가는 곳입니다</p>
				<p class="contListDet">이 곳은 게시물 간단한 설명이 들어가는 곳입니다.</p>
				<p class="contListDate">2022.06.24</p>
			</div>
		</a>
	</div>


	<div class="contList dp_f dp_cc">
		<a class="dp_f dp_cc" href="" title="" style="width: 100%; height: 100%;">
			<div class="contListImg">
				<!--사진 배경으로-->
			</div>
			<div class="contListTxt">
				<p class="contListTit">이 곳은 게시물 제목이 들어가는 곳입니다</p>
				<p class="contListDet">이 곳은 게시물 간단한 설명이 들어가는 곳입니다.</p>
				<p class="contListDate">2022.06.24</p>
			</div>
		</a>
	</div>

	<div class="pageNum dp_f dp_cc">
		<a class="prev" href="" title=""><span class="lnr lnr-chevron-left"></span></a>
		<a class="num on" href="" title="">1</a>
		<a class="num" href="" title="">2</a>
		<a class="num" href="" title="">3</a>
		<a class="next" href="" title=""><span class="lnr lnr-chevron-right"></span></a>
	</div>

</div>

<style>
	.contList {
		padding: 45px 0;
		border-bottom: 1px solid #DDDDDD;
	}

	.contList .contListImg {
		margin: 0 100px 0 49px;
		width: 580px;
		height: 350px;
		background-repeat: no-repeat; 
		background-position: center center;
		background-size: cover;
	}
	.contList:nth-child(1) .contListImg {
		background-image:url('/images/list01Pic.png');
	}
	.contList:nth-child(2) .contListImg {
		background-image:url('/images/list02Pic.png');
	}
	.contList:nth-child(3) .contListImg {
		background-image:url('/images/list03Pic.png');
	}

	.contList .contListTxt .contListTit {
		margin-bottom: 20px;
		font-weight: 600;
		font-size: 1.5rem;
	}

	.contList .contListTxt .contListDet {
		margin-bottom: 42px;
		font-size: 1.125rem;
	}

	.contList .contListTxt .contListDate {
		color: #707070;
	}

	.pageNum {
		margin: 80px 0 100px 0;
	}

	.pageNum a {
		display: block;
		margin: 0 5px;
		width: 30px;
		height: 30px;
		border-radius: 50%;
		line-height: 30px;
		text-align: center;
	}

	.pageNum .num.on {
		background-color :#4169E2;
		color: #fff;
	}

	.pageNum .lnr {
		font-weight: bold;
	}

	.pageNum .num:hover {
		background-color :#4169E2;
		color: #fff;
	}
</style>