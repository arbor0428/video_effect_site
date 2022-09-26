<?
	include "/home/crob/www/module/login/head.php";	
	include "/home/crob/www/module/class/class.DbCon.php";	

	$table_id = 'table_1657186161';	
	$boardTitle='보도자료';

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
				<li class="tabBtn on">
					<a class="dp_b bold1" href="/sub03/sub01.php" title="">보도자료</a>
				</li>
				<li class="tabBtn">
					<a class="dp_b bold1" href="/sub03/sub02.php" title="">BLOG</a>
				</li>
			</ul>
		<?
			}
		?>
			<div class="tabContWrap">
				<!-- 본문 -->
				<?
					if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
						/*
						echo $type.'<br>';
						echo$write_file.'<br>';
						echo$list_file.'<br>';
						echo$view_file.'<br>';
						*/
					}

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


</style>

<?
	include '../footer2.php';
?>
