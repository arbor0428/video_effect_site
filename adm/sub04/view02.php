<?
	
	//error_reporting( E_ALL );
	//ini_set( "display_errors", 1 );

	//인적사항
	$sql = "select * from hk_sub661 where uid='$uid'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result);
	
	$name = $row["name"];
	$e_name = $row["e_name"];
	$birth = $row["birth"];
	$country = $row["country"];
	$h_field = $row["h_field"];
	$addr01 = $row["addr01"];
	$s_phone = $row["s_phone"];
	$t_phone = $row["t_phone"];
	$email = $row["email"];
	$military = $row["military"];
	$army = $row["army"];
	$a_class = $row["a_class"];
	$e_reason = $row["e_reason"];
	$m_period = $row["m_period"];
	$m_period02 = $row["m_period02"];
	$motive = $row["motive"];
	$skill = $row["skill"];
	$task01 = $row["task01"];
	$pfmce = $row["pfmce"];
	$advantage = $row["advantage"];
	$task02 = $row["task02"];
	$upfile01 = $row["upfile01"];
	$realfile01 = $row["realfile01"];
	$w_date01 = $row["w_date01"];
	$w_date02 = $row["w_date02"];
	$w_date03 = $row["w_date03"];
	$writer01 = $row["writer01"];
	$writer02 = $row["writer02"];
	$b_name = $row["b_name"];
	$a_date01 = $row["a_date01"];
	$a_date02 = $row["a_date02"];
	$a_date03 = $row["a_date03"];
	$writer03 = $row["writer03"];
	$writer04 = $row["writer04"];
	$userip = $row["userip"];
	$rTime = $row["rTime"];
	$reg_date = $row["reg_date"];
	$rTimeTxt = date('Y 년 m 월 d 일', $rTime);

?>

<script language='javascript'>

	function reg_list(){

		form = document.FRM;
		form.type.value = 'list';
		form.action = '<?=$PHP_SELF?>';
		form.submit();

	}

	function file_down(f1,f2){
		form = document.frm_down;
		form.file_name.value = f1;
		form.file_rename.value = f2;
		form.submit();
	}

</script>

<style>
	.tableWrap-c {width:870px; margin:20px 0 0 80px; border:1px solid #d1d1d1;box-sizing:border-box; padding:20px;}
	table {border-collapse:collapse;}
	table .lineT th {background-color: #f5f5f5; box-sizing:border-box; font-weight:500;}
	table .lineT td {text-align:center; font-size:14px; box-sizing:border-box}
	table .lineT {height: 40px; border-bottom:1px solid #ccc;}
	.topTitle {font-size: 32px; font-weight: 700; letter-spacing:12px; /*background-color:#a0c3b2;*/ padding:40px 0 80px;}
	.subTitle {height:60px;  text-indent:20px; border-bottom:1px solid #ccc; /*background-color: #ddd;*/ font-size:18px;}
	.subTitle2 {height:45px;  text-indent:20px; border-bottom:1px solid #ccc; background-color: #f5f5f5;}
	.agreectn {padding: 10px 20px 30px; font-weight: 700; color: #333; line-height: 23px; text-align:center; box-sizing:border-box;}
	.agreedate {margin-bottom:70px; text-align:center;}
	.agreesign {float:right;}
	.agreesign input {width:50%;}
	.bot_title {margin:50px 0; text-align:center; font-size:28px; font-weight:700; color:#000;}
</style>

<!-- 다운로드 폼 -->
<form name='frm_down' method='post' action='appDown.php'>
	<input type='hidden' name='file_name' value="">
	<input type='hidden' name='file_rename' value="">
</form>


<form name='FRM' action="<?=$PHP_SELF?>" method='post'>
	<input type='hidden' name='type' value='<?=$type?>'>
	<input type='hidden' name='uid' value='<?=$uid?>'>
	<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
	<input type='hidden' name='record_start' value='<?=$record_start?>'>

<div style="width:700px; margin: 50px auto 0; text-align:right;">
	<a class="btn blk" href="javascript:reg_list();">목록</a>

	<?if($upfile01){?>
	<a class="btn blue" href='javascript:file_down("<?=$upfile01?>","<?=$realfile01?>");'>다운로드파일</a>
	<p class="m-12 f14">※ 입사지원자가 첨부한 파일을 다운로드 받으실 수 있습니다.</p>
	<?}?>
	<!-- <a class="big cbtn black" href="javascript://" onclick="window.open('/module/printSet.php?mod=1&amp;uid=<?=$uid?>','ieprint','width=990,height=900,scrollbars=yes','_blank')">인쇄하기</a> -->
</div>


<div class="tableWrap-c">
	<div class="tableWrap">
		<table style="width:100%;"> 
			<tr>
				<th class="topTitle">입사지원서</th>
			</tr>
		</table>

		<!--1.기본사항-->
		<table style="width:100%;">
			<colgroup>
				<col width="15%">
				<col width="35%">
				<col width="15%">
				<col width="35%">
			</colgroup>   
			<tr class="subTitle">
				<th style="text-align:left;" colspan="4">1. 기본사항</th>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">한글성명</th>
				<td><?=$name?></td>
				<th style="border-left:1px solid #ccc; border-right:1px solid #ccc;">영문성명</th>
				<td><?=$e_name?></td>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">생년월일</th>
				<td><?=$birth?></td>
				<th style="border-left:1px solid #ccc; border-right:1px solid #ccc;">국적</th>
				<td><?=$country?></td>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">희망분야</th>
				<td><?=$h_field?></td>
				<th style="border-left:1px solid #ccc; border-right:1px solid #ccc;">이메일</th>
				<td><?=$email?></td>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">휴대폰</th>
				<td><?=$s_phone?></td>
				<th style="border-left:1px solid #ccc; border-right:1px solid #ccc;">자택</th>
				<td><?=$t_phone?></td>
			</tr>
			<tr class="lineT">
				<th style="border-right;1px solid #ccc; border-right:1px solid #ccc;">현주소</th>
				<td colspan="3"><?=$addr01?></td>
			</tr> 
		</table>

		<!--2.학력사항-->
		<table style="width:100%;">
		<colgroup>
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
		</colgroup>   
		<tr class="subTitle">
			<th style="text-align:left;" colspan="5">2. 학력사항</th>
		</tr>
		<tr class="lineT">
			<th style="border-right:1px solid #ccc;">구분</th>
			<th style="border-right:1px solid #ccc;">학교명</th>
			<th style="border-right:1px solid #ccc;">전공</th>
			<th style="border-right:1px solid #ccc;">지역</th>
			<th style="border-right:1px solid #ccc;">졸업구분</th>
		</tr>

	<?

		//학력사항
		$sql = "select * from hk_sub662 where puid='$uid'";
		$result = mysqli_query($dbc,$sql);
		$num = mysqli_num_rows($result);
		//echo $num.'/';
		for($i=0; $i<$num; $i++) {
			
			$s_name = $i + 1;
			$row = mysqli_fetch_array($result);

			$gubun = $row["gubun"];
			$s_name = $row["s_name"];
			$major = $row["major"];	
			$area01 = $row["area01"];
			$j_gubun = $row["j_gubun"];

	?>

		<table style="width:100%; table-layout:fixed;">
			<colgroup>
					<col width="20%">
					<col width="20%">
					<col width="20%">
					<col width="20%">
					<col width="20%">
			</colgroup>
			<tr class="lineT">
				<td style="border-right:1px solid #ccc;"><?=$gubun?></td>
				<td style="border-right:1px solid #ccc;"><?=$s_name?></td>
				<td style="border-right:1px solid #ccc;"><?=$major?></td>
				<td style="border-right:1px solid #ccc;"><?=$area01?></td>
				<td><?=$j_gubun?></td>
			</tr>
		</table>

	<?
		}	
	?>

		<!--3.직무자격-->
		<table style="width:100%;">
			<colgroup>
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<col width="25%">
			</colgroup>   
			<tr class="subTitle">
				<th style="text-align:left;" colspan="4">3. 직무자격</th>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">직무자격증</th>
				<th style="border-right:1px solid #ccc;">등급</th>
				<th style="border-right:1px solid #ccc;">취득일</th>
				<th style="border-right:1px solid #ccc;">유효일</th>
			</tr>

	<?
			
			//직무자격
			$sql = "select * from hk_sub663 where puid='$uid'";
			$result = mysqli_query($dbc,$sql);
			$num = mysqli_num_rows($result);
			//echo $num.'/';
			for($i=0; $i<$num; $i++) {
			
				$license = $i+1;
				$row = mysqli_fetch_array($result);

				$license = $row["license"];
				$rank = $row["rank"];
				$a_date011 = $row["a_date011"];
				$v_date01 = $row["v_date01"];

	?>
			<table style="width:100%; table-layout:fixed;">
			<colgroup>
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<col width="25%">
			</colgroup>
			<tr class="lineT">
				<td style="border-right:1px solid #ccc;"><?=$license?></td>
				<td style="border-right:1px solid #ccc;"><?=$rank?></td>
				<td style="border-right:1px solid #ccc;"><?=$a_date011?></td>
				<td><?=$v_date01?></td>
			</tr>
		</table>

	<?
	}
	?>

		<!--4.어학(회화)-->
		<table style="width:100%;">
			<colgroup>
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<col width="25%">
			</colgroup>   
			<tr class="subTitle">
				<th style="text-align:left;" colspan="4">4. 어학(회화)</th>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">외국어</th>
				<th style="border-right:1px solid #ccc;">TEST명</th>
				<th style="border-right:1px solid #ccc;">성적</th>
				<th style="border-right:1px solid #ccc;">취득일</th>
			</tr>

	<?

		//어학(회화)
		$sql = "select * from hk_sub664 where puid='$uid'";
		$result = mysqli_query($dbc,$sql);
		//echo $num.'/';
		for($i=0; $i<$num; $i++) {		
			$row = mysqli_fetch_array($result);

			$language = $row["language"];
			$t_name = $row["t_name"];
			$grade = $row["grade"];
			$a_date022 = $row["a_date022"];

	?>

			<table style="width:100%; table-layout:fixed;">
			<colgroup>
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<col width="25%">
			</colgroup>
			<tr class="lineT"'>
				<td style="border-right:1px solid #ccc;"><?=$language?></td>
				<td style="border-right:1px solid #ccc;"><?=$t_name?></td>
				<td style="border-right:1px solid #ccc;"><?=$grade?></td>
				<td><?=$a_date022?></td>
			</tr>
		</table>

	<?
		}
	?>

	<!-- 	5.경력 사항
			<table style="width:100%; border-top:2px solid #ccc;">
			<colgroup>
				<col width="33.333333%">
				<col width="33.333333%">
				<col width="33.333333%">
			</colgroup>   
			<tr class="subTitle">
				<th style="text-align:left;" colspan="3">5. 경력사항</th>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">1순위</th>
				<th style="border-right:1px solid #ccc;">2순위</th>
				<th>3순위</th>
			</tr>
			<tr class="lineT">
				<td style="border-right:1px solid #ccc;"><?=$ncs01?></td>
				<td style="border-right:1px solid #ccc;"><?=$ncs02?></td>
				<td><?=$ncs03?></td>
			</tr>
		</table> -->

		<!--5.경력사항-->
		<table style="width:100%;">
			<colgroup>
				<col width="20%">
				<col width="20%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="30%">
			</colgroup>   
			<tr class="subTitle">
				<th style="text-align:left;" colspan="6">5. 경력사항</th>
			</tr>
			<tr class="lineT">
				<th style="border-right:1px solid #ccc;">근무기간</th>
				<th style="border-right:1px solid #ccc;">직장명</th>
				<th style="border-right:1px solid #ccc;">지역</th>
				<th style="border-right:1px solid #ccc;">직급</th>
				<th style="border-right:1px solid #ccc;">Status</th>
				<th style="border-right:1px solid #ccc;">직무(담당업무)</th>
			</tr>

	<?

			//경력사항
			$sql = "select * from hk_sub665 where puid='$uid'";
			$result = mysqli_query($dbc,$sql);
			//echo $num.'/';
			for($i=0; $i<$num; $i++) {
			$row = mysqli_fetch_array($result);
			$gubun = $i + 1;

			$w_date011 = $row["w_date011"];
			$w_date022 = $row["w_date022"];
			$n_work = $row["n_work"];
			$area02 = $row["area02"];
			$positon = $row["positon"];
			$status = $row["status"];
			$job = $row["job"];

	?>

		<table style="width:100%; table-layout:fixed;">
			<colgroup>
				<col width="20%">
				<col width="20%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="30%">
			</colgroup>
			<tr class="lineT">
				<td style="border-right:1px solid #ccc;"><?=$w_date011?><br>~&nbsp;<?=$w_date022?></td>
				<td style="border-right:1px solid #ccc;"><?=$n_work?></td>
				<td style="border-right:1px solid #ccc;"><?=$area02?></td>
				<td style="border-right:1px solid #ccc;"><?=$positon?></td>
				<td style="border-right:1px solid #ccc;"><?=$status?></td>
				<td><?=$job?></td>
			</tr>
		</table>

	<?
			}
	?>
		<!--7.기타-->
		<table style="width:100%;">
			<tr class="subTitle">
				<th style="text-align:left;">6. 자기소개서</th>
			</tr>
			<tr class="subTitle2">
				<th style="text-align:left;">(1)지원동기(이직사유),입사 후 포부</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$motive?></td>
			</tr>
		</table>
		<table style="width:100%;">
			<tr class="subTitle2">
				<th style="text-align:left;">(2)보유기술</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$skill?></td>
			</tr>
		</table>
		<table style="width:100%;">
			<tr class="subTitle2">
				<th style="text-align:left;">(3) 주요 수행과제,본인 역할/기여도 요약 *'세부 수행과제 및 성과'에 상세하게 작성</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$task01?></td>
			</tr>
		</table>
		<table style="width:100%;">
			<tr class="subTitle2">
				<th style="text-align:left;">(4) 논문실적,특허출원내역,수상내역</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$pfmce?></td>
			</tr>
		</table>
		<table style="width:100%;">
			<tr class="subTitle2">
				<th style="text-align:left;">(5) 본인의 강점, 보완점(업무, 성격등)</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$advantage?></td>
			</tr>
		</table>
		<table style="width:100%;">
			<tr class="subTitle2">
				<th style="text-align:left;">8. 세부 수행과제 및 성과</th>
			</tr>
			<tr style="height: 150px; border-bottom:1px solid #ccc;">
				<td style="min-height:100%; padding:0 20px; box-sizing:border-box;" colspan="5"><?=$task02?></td>
			</tr>
		</table>
		<p class="agreectn">위 기재사항은 사실과 다름없고 흥국산업 주식회사(이하 "회사"라 함)가 회사업무에 반드시 필요한 범위 내에서 개인정보보호법 등 관련 법령상의 개인정보보호 규정을 준수하여 본인의 개인정보를 수집, 이용, 제공하는 데 동의합니다.</p>

		<p class="agreedate" align="right"><?=$rTimeTxt?></p> <!--신청한날짜 나오게하기-->
		<div class="clearfix">
			<p class="agreesign" style="width:210px;">신청인 <span style="display:inline-block; width:50%; text-align:center;"><?=$name?></span><span>(서명)</span></p>
		</div>
		<p class="bot_title">흥국산업 귀중</p>
	</div>
</div>