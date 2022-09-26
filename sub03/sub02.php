<?
	include "/home/crob/www/module/login/head2.php";	
	include "/home/crob/www/module/class/class.DbCon.php";	

	$table_id = 'table_1657186170';	
	$boardTitle='BLOG';

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";
	$view_file='view01a_.php';
?>

<div id="fullpage_sub03">
	<div class="section sec01">
		<?
		include '../header2.php';
		?>
		<div class="pagesideTit poppin bold1">NEWS</div>
		<div class="newsData">
		<?
			if($type=='list'){
		?>
			<ul class="tabBtnWrap dp_f dp_cc">
				<li class="tabBtn">
					<a class="dp_b bold1" href="/sub03/sub01.php" title="">보도자료</a>
				</li>
				<li class="tabBtn on">
					<a class="dp_b bold1" href="/sub03/sub02.php" title="">BLOG</a>
				</li>
			</ul>
		<?
			}
		?>
			<div class="tabContWrap">
				<!-- 본문 -->
				<?
					switch($type){
						case 'write' :
						case 'edit' :
											include $boardRoot.$write_file;
											break;

						case 'list' :
											include $boardRoot.'query.php';	//게시판 내용 쿼리
											include $boardRoot.$list_file;	//게시판 리스트
											include $boardRoot.'pageNum.php';	//게시판 페이지번호
											break;

						case 'view' :
											include $boardRoot.$view_file;
											break;

						case 're_write' :
						case 're_edit' :
											include $boardRoot.'re_write.php';
											break;

						case 're_view' :
											include $boardRoot.'re_view.php';
											break;
					}
				?>		
				<!-- 본문 -->
			</div>

			
		</div>
	</div>



<style>
	#header {display: block;}

	#fullpage_sub03 .pagesideTit {
		position: absolute;
		top: 14%;
		left: -55px;
		transform: rotate(90deg);
		font-size: 4.75rem;
		color: #DDDDDD;
	}

	#fullpage_sub03 .newsData {
		padding-top: 172px;
		margin: 0 auto;
		width: 1440px;
	}

	#fullpage_sub03 .tabBtnWrap {
		margin-bottom: 40px;
	}

	#fullpage_sub03 .tabBtn {
		position: relative;
		margin: 0 30px;
		padding: 0 10px;
	}

	#fullpage_sub03 .tabBtn::after {
		content: "";
		display: block;
		position: absolute;
		bottom: -10px;
		left: 50%;
		transform: translateX(-50%);
		width: 0;
		height: 5px;
		background-color: #4169E2;
		transition: all 0.3s;
	}

	#fullpage_sub03 .tabBtn:hover::after  {
		width: 100%;
	} 

	#fullpage_sub03 .tabBtn.on::after  {
		width: 100%;
	} 

	#fullpage_sub03 .tabBtn a {
		font-size: 1.5rem;
	}


@media (max-width:1570px){	

	#fullpage_sub03 .pagesideTit {display: none;}
	#fullpage_sub03 .newsData {width: 90%;}

}

@media (max-width:1070px){	
	.contList > a {display: block;}
	.contList .contListImg {margin: 0 auto 49px; width: 100%;}
	.contList .contListTxt {margin: 0 auto; max-width: 100%;}
	.contList .contListTxt .contListTit {text-align: center; font-size: 1.125rem;}
	.contList .contListTxt .contListDet {text-align: center; font-size: 0.875rem;}
	.contList .contListTxt .contListDate {text-align: center; font-size: 0.875rem;}
	#fullpage_sub03 .tabBtn {margin: 0 20px;}
	#fullpage_sub03 .tabBtn a {font-size: 1.125rem;}
	.adm_write_btn {margin: 20px auto; text-align: center;}

}

@media (max-width:760px){	
	.contList .contListImg {height: 180px;}
	.top_titWrap {justify-content: space-between;}
	.top_titWrap > p {margin: 0 10px;}
	.viewTit {font-size: 1.375rem; line-height: 1.3;}
	.viewDet {margin-bottom: 50px; font-size: 1rem;}
	.viewShow {padding: 40px 0;}
	.prevNextWrap .moreBtnTit {margin-bottom: 0; font-size: 1.625rem; padding-top: 40px;}
	.listBtn {padding: 0; margin: 40px auto; width: 195px; height: 55px;}
	.listBtn a {padding: 0 10px;}
	.listBtn .submitTxt {padding: 0 10px;}
	.listBtn .submitTxt .submiTxt_f {font-size: 1rem;}
}
</style>


<?
	include '../footer3.php';
?>
