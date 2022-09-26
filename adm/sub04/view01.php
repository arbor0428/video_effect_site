<?

		$sql = "select * from ks_form where uid='$uid'";
		$result = mysqli_query($dbc,$sql);
		$row = mysqli_fetch_array($result);

		$name = $row["name"];
		$email = $row["email"];
		$address = $row["address"];
		$ment = $row["ment"];

		$userip = $row["userip"];
		$rTime = $row["rTime"];
		$rDate = $row["rDate"];

?>

<script language='javascript'>
 
	function reg_list(){
		form = document.FRM;
		form.type.value = 'list';
		form.target = '';
		form.action = 'up_index01.php';
		form.submit();

	}

	function reg_del(){
		
		if(confirm('정말로 삭제하시겠습니까?')){
			form = document.FRM;
			form.type.value = 'del';
			form.action = '../../sub04/proc.php';
			form.submit();
		}
	}

</script>
<style>
.content_box {padding:0; margin:50px auto;}
.content_box div.link_go{width: 100%; margin-top: 40px;}
.content_box div.link_go ul{display: flex; margin: 0 auto; justify-content: right;} 
.content_box div.link_go ul li{margin: 0 8px; text-align:center; transition: all ease-in-out 0.3s; box-sizing:border-box; cursor: pointer;}

/* .content_box div.link_go ul li>a:hover{box-shadow: 3px 3px 5px #999;} */
.tit1 {margin-bottom:50px; color: #222; text-align:center; font-size:30px;}
.content_box .form01Wrap .quote_row {height:45px; color: #777; border-bottom:1px solid #ccc;}
.content_box .form01Wrap .quote_row:first-child {border-top:1px solid #ccc;}
.content_box .form01Wrap .quote_row h4 {float:left; width:22%; height:100%; background-color:#f9f9f9; line-height:45px; text-align:center; border-left:1px solid #ccc; border-right:1px solid #ccc; box-sizing:border-box; font-weight:500;}
.content_box .form01Wrap .quote_row .subcon {float:left; padding-left:30px; border-right:1px solid #ccc; width:78%; height:100%; line-height:45px; box-sizing:border-box;}


</style>
<form name='FRM' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">

	<input type='hidden' name='type' value='<?=$type?>'>
	<input type='hidden' name='uid' value='<?=$uid?>'>
	<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
	<input type='hidden' name='record_start' value='<?=$record_start?>'>
	<input type='hidden' name='field' value='<?=$field?>'>
	<input type='hidden' name='word' value='<?=$word?>'>
	<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
	<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>
	<input type='hidden' name='table_id' value='<?=$table_id?>'>

	<div class='content_box'>
		<div class="form01Wrap">
			<div class="quote_row clearfix">
				<h4>Email</h4>
				<div class="subcon"><?=$email?></div>
			</div>
			<div class="quote_row clearfix">
				<h4>Name</h4>
				<div class="subcon"><?=$name?></div>
			</div>
			<div class="quote_row clearfix">
				<h4>Address</h4>
				<div class="subcon"><?=$address?></div>
			</div>
			<div class="quote_row clearfix" style='height:auto'>
				<h4>Ment</h4>
				<div class="subcon"><?=$ment?></div>
			</div>


		</div>
		<div class="link_go">
			<ul>
				<li><a class="btn blk" href="javascript:reg_list()">목록으로</a></li>
				<li><a class="btn red" href="javascript:reg_del()">삭제하기</a></li>
			</ul>
		</div>
	</div>


</form>

