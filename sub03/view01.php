<?
	include "/home/crob/www/module/login/head2.php";	
?>

<style>
	#header {display: block;}

	.sub0301viewWrap {
		padding-top: 172px;
		margin: 0 auto;
		width: 1440px;
	}
	
	.top_titWrap {
		margin-bottom: 82px;
	}
		
	.top_titWrap > p {
		margin: 0 40px;
	}
	.top_titWrap .blueTit {
		font-size: 1.125rem;
		color: #0057D9;
		font-weight: 600;
	}

	.top_titWrap .grayDate {
		font-size: 1.125rem;
		color: #707070;
	}

	.viewTit {
		margin-bottom: 18px;
		font-size: 2rem;
		font-weight: 600;
		text-align: center;
	}

	.viewDet {
		margin-bottom: 100px;
		font-size: 1.125rem;
		text-align: center;
	}
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
	.contList.prev .contListImg {
		background-image:url('/images/list01Pic.png');
	}
	.contList.next .contListImg {
		background-image:url('/images/list02Pic.png');
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

	.viewShow .viewimgWrap {
		margin: 0 auto;
		width: 960px;
		height: 550px;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		background-image: url("/images/viewDetail.png");
	}

	.viewTxtWrap {
		text-align: center;
		padding: 60px 0;
	}

	.prevNextWrap .moreBtnTit {
		border-top: 1px solid #DDDDDD;
		margin-bottom: 40px;
		padding-top: 80px;
		font-size: 2rem;
		font-weight: 600;
		text-align: center;
	}

	.listBtnWrap {
		position: relative;
		border: 1px solid #000;
		margin: 80px auto 150px;
		width: 300px;
		height: 70px;
		box-sizing: border-box;
	}

	.listBtnWrap .listBtn_hover {
		position: absolute;
		top:0;
		left:0;
		width: 0;
		height: 100%;
		background-color: #4169E2;
		transition: all 0.3s;
	}

	.listBtnWrap .listBtn {
		position: absolute;
		padding: 0 40px;
		width: 100%; 
		height: 100%;
		box-sizing: border-box;
	}

	.listBtnWrap .submiTxt {
		font-size: 1.25rem;
	}

	.listBtnWrap .lnr-arrow-right {
		font-size: 1.25rem;
		font-weight: bold;
	}

	.listBtnWrap:hover {
		border: 1px solid #4169E2;
	}

	.listBtnWrap:hover .listBtn_hover {
		width: 100%;
	}

	.listBtnWrap:hover .submiTxt,  .listBtnWrap:hover .lnr-arrow-right {
		color: #fff;
	}

</style>

<div id="fullpage_sub03_01">
	<div class="section sec01">
		<?
		include '../header.php';
		?>
		<div class="sub0301viewWrap">
			<div class="top_titWrap dp_f dp_cc">
				<p class="blueTit">보도자료</p>
				<p class="grayDate">2022.06.24</p>
			</div>
			<div class="viewTit">이 곳은 게시물 제목이 들어가는 곳입니다</div>
			<div class="viewDet">이 곳은 게시물 제목이 들어가는 곳입니다</div>

			<div class="viewShow">
				<div class="viewimgWrap">
					<!--사진 들어가는 곳-->
				</div>
				<div class="viewTxtWrap">
					게시글 내용이 들어갑니다.
				</div>
			</div>

			<div class="prevNextWrap">
				<p class="moreBtnTit">크로브 더 알아보기</p>

				<div class="contList dp_f dp_cc prev">
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

				<div class="contList dp_f dp_cc next">
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
			</div>

			<div class="listBtnWrap">
				<div class="listBtn_hover"></div>
				<a href="" class="listBtn dp_sb dp_c">
					<span class="submiTxt">목록보기</span>
					<span class="lnr lnr-arrow-right"></span>
				</a>
			</div>
		</div>
	</div>

<?
	include '../footer.php';
?>
