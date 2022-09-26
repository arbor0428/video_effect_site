<?

	$record_count = 30;  //한 페이지에 출력되는 레코드수

	$link_count = 10; //한 페이지에 출력되는 페이지 링크수

	if(!$record_start){
		$record_start = 0;
	}

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	//쿼리조건
	$query_ment = "";

	if($f_name)$query_ment .= " where $f_field like '%$f_name%'"; // 구분
	//if($f_cmp_name)		$query_ment .= " and cmp_name like '%$f_cmp_name%'"; // 기업명
	//if($f_name)		$query_ment .= " and name like '%$f_name%'"; // 담당자

	
	//정렬방식
	$sort_ment = "order by uid asc";

	$query = "select * from hk_sub661 $query_ment $sort_ment";

	$result = mysqli_query($dbc,$query) or die("연결실패");

	$total_record = mysqli_num_rows($result);

	$total_page = (int)($total_record / $record_count);

	if($total_record % $record_count){
		$total_page++;
	}

	$query2 = "select * from hk_sub661 $query_ment $sort_ment limit $record_start, $record_count";

	$result = mysqli_query($dbc,$query2);

?>

<script language='javascript'>

	function goSearch(){

	form = document.frm01;
	form.type.value = '';
	form.record_start.value = 0;
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();

	}

	function cwrite(){
		form = document.frm01;
		form.type.value = 'write';
		form.target = '';
		form.action = 'up_index02.php';
		form.submit();
	}

	function cedit(uid){
		form = document.frm01;
		form.type.value = 'view';
		form.uid.value = uid;
		form.target = '';
		form.action = 'up_index02.php';
		form.submit();
	}

	function ifra_xls(){

		form = document.frm01;
		form.type.value = '';
		form.target = '';
		form.action = 'excel02.php';
		form.submit();

	}
	

</script>

<form name='frm01' method='post' action='<?=$PHP_SELF?>'>
	<input type="text" style="display: none;">  <!-- 텍스트박스 1개이상 처리.. 자동전송방지 -->
	<input type='hidden' name='type' value=''>
	<input type='hidden' name='uid' value=''>
	<input type='hidden' name='mCade01' value=''>
	<input type='hidden' name='mCade02' value=''>
	<input type='hidden' name='passChk' value=''><!-- 미승인 상품도 확인할 수 있도록하는 변수 -->

<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>

<style>
	input[type="text"], input[type="password"] {
		/*display: block;*/
		width: 100%;
		min-width: inherit;
	   /* max-width: 29.2em;*/
		height:30px; 
		border-radius:3px;
		background-color: #fff;
		/*font-size: 0.9375em;*/
		padding: 0 1.4em;
		border: 1px solid #e1e1e1 !important;
		box-sizing:border-box;
		-webkit-appearance: none;
	}

	select#data01:focus, input[type="text"]:focus, input[type="password"]:focus {
		background-color: #fff;
		outline: 0;
		box-shadow: 0 0 0 0.125rem rgba(196, 216, 206, .5);
	}
	.board-select {height:30px;border:1px solid #dddddd;border-radius:3px;padding:0 2em 0 1em;vertical-align:middle; background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat; -webkit-appearance: none; -moz-appearance: none; appearance: none;}
</style>


<p class="adm-titles">입사지원 확인</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<!--<a href="javascript:ifra_xls();" class="big cbtn red">엑셀다운로드</a>-->
		<td align='right'>
			<select name="f_field" class='board-select' style='width:100px;border:1px solid #e1e1e1;' title="검색구분">
				<option value='name' <?if($f_field == 'name') echo 'selected';?>>성명</option>
				<option value='affil' <?if($f_field == 'affil') echo 'selected';?>>소속</option>
				<option value='job' <?if($f_field == 'job') echo 'selected';?>>직위</option>
				<!-- <option value='email' <?if($f_field == 'email') echo 'selected';?>>이메일</option> -->
			</select>
			<input type="text"  name="f_name" style='display:inline-block; width:200px;' value="<?=$f_name?>" onkeypress="if(event.keyCode==13){goSearch();}" title="검색어">
			<a href="javascript:goSearch();" class="btn blk">검색</a></td>		
	</tr>
</table>


<div class="adm_gTable">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style='margin-top:10px;'>
		<tr>						
			<td>
				<table cellpadding='0' cellspacing='0' border='0' width='100%' class='gTable'>
					<tr>
						<th width="5%" class="bl-n">번호</th>
						<th width="15%">성명</th>
						<th width="15%">희망분야</th>
						<th width="15%">연락처</th>
						<th width="15%">이메일</th>
						<th width="13%" class="br-n">접수날짜</th>
					</tr>

	<?

		if($total_record != '0'){
			$i = $total_record - ($current_page - 1) * $record_count;

			while($row = mysqli_fetch_array($result)){

				$uid = $row["uid"]; //번호
				$name = $row["name"]; // 성명
				$h_field = $row["h_field"];  // 희망분야
				$s_phone = $row["s_phone"];	// 연락처
				$email = $row["email"];	// 연락처
				$reg_date = $row["reg_date"]; //접수날짜

				//시설별 색상(/www/module/login/head.php 에서 정의)
				if($site)	$siteTxt = "<span class='".$siteClass[$site]."'>".$site."</span>";
				else		$siteTxt = '';

				if($status=='접수')						$statusTxt = "<span class='ico01'>접수</span>";

	?>

					<tr onmouseover="this.style.backgroundColor='#f9f9f9'" onmouseout="this.style.backgroundColor='#ffffff'" style='cursor:pointer;' onclick="cedit('<?=$uid?>');">
						<td class="bl-n"><?=$i?></td>
						<td class="txt-c"><?=$name?></td>
						<td class="txt-c"><?=$h_field?></td>
						<td class="txt-c"><?=$s_phone?></td>
						<td class="txt-c"><?=$email?></td>
						<td class="br-n txt-c"><?=$reg_date?></td>
					</tr>

	<?

			$i--;
		}
	}else{

	?>
					<tr> 
						<td colspan="6" align='center' height='50'>접수된 대관신청 내역이 없습니다.</td>
					</tr>
	<?
	}
	?>
				</table>									
			</td>
		</tr>
	</table>
</div>




</form>


<?
	$fName = 'frm01';
	include '../../module/pageNum.php';
?>