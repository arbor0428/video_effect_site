<?

	include '../../module/class/class.DbCon.php';
	include '../../module/class/class.Util.php';


	$file_name = date("흥국산업 입사지원 Y년 m월 d일"); // 엑셀파일명 설정
	
	$xls_name = $file_name;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=$xls_name.xls");

?>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>

<style>
	br{mso-data-placement:same-cell;}
</style>

<table cellpadding='0' cellspacing='0' border='1'>
	<tr align='center'>
		<th width="150" bgcolor='f5f5f5' colspan = '7'>기본사항</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>학력사항01</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>학력사항02</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>학력사항03</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>학력사항04</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>학력사항05</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>직무자격01</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>직무자격02</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>직무자격03</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>직무자격04</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>직무자격05</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>어학(회화)01</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>어학(회화)02</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>어학(회화)03</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>어학(회화)04</th>
		<th width="150" bgcolor='f5f5f5' colspan = '5'>자격사항05</th>
		<th width="150" bgcolor='f5f5f5' colspan = '4'>경력사항01</th>
		<th width="150" bgcolor='f5f5f5' colspan = '4'>경력사항02</th>
		<th width="150" bgcolor='f5f5f5' colspan = '4'>경력사항03</th>
		<th width="150" bgcolor='f5f5f5' colspan = '4'>경력사항04</th>
		<th width="150" bgcolor='f5f5f5' colspan = '4'>경력사항05</th>
	</tr>
	<tr align='center'>
		<!-- 기본사항 -->
		<td width="150" bgcolor='f5f5f5'>한글성명</td>
		<td width="150" bgcolor='f5f5f5'>영문성명</td>
		<td width="150" bgcolor='f5f5f5'>생년월일</td>
		<td width="150" bgcolor='f5f5f5'>국적</td>
		<td width="150" bgcolor='f5f5f5'>희망분야</td>
		<td width="150" bgcolor='f5f5f5'>현주소</td>
		<td width="150" bgcolor='f5f5f5'>휴대폰</td>
		<td width="150" bgcolor='f5f5f5'>자택</td>
		<td width="150" bgcolor='f5f5f5'>E-mail</td>
		<td width="150" bgcolor='f5f5f5'>병역구분</td>
		<td width="150" bgcolor='f5f5f5'>군별</td>
		<td width="150" bgcolor='f5f5f5'>계급</td>
		<td width="150" bgcolor='f5f5f5'>면제사유</td>
		<td width="150" bgcolor='f5f5f5'>복무기간</td>

		<!-- 학력사항 -->
		<td width="150" bgcolor='f5f5f5'>구분</td>
		<td width="150" bgcolor='f5f5f5'>학교명</td>
		<td width="150" bgcolor='f5f5f5'>전공</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>기간</td>
		<td width="150" bgcolor='f5f5f5'>주야</td>
		<td width="150" bgcolor='f5f5f5'>학점</td>
		<td width="150" bgcolor='f5f5f5'>졸업구분</td>
		<td width="150" bgcolor='f5f5f5'>구분</td>
		<td width="150" bgcolor='f5f5f5'>학교명</td>
		<td width="150" bgcolor='f5f5f5'>전공</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>기간</td>
		<td width="150" bgcolor='f5f5f5'>주야</td>
		<td width="150" bgcolor='f5f5f5'>학점</td>
		<td width="150" bgcolor='f5f5f5'>졸업구분</td>
		<td width="150" bgcolor='f5f5f5'>구분</td>
		<td width="150" bgcolor='f5f5f5'>학교명</td>
		<td width="150" bgcolor='f5f5f5'>전공</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>기간</td>
		<td width="150" bgcolor='f5f5f5'>주야</td>
		<td width="150" bgcolor='f5f5f5'>학점</td>
		<td width="150" bgcolor='f5f5f5'>졸업구분</td>
		<td width="150" bgcolor='f5f5f5'>구분</td>
		<td width="150" bgcolor='f5f5f5'>학교명</td>
		<td width="150" bgcolor='f5f5f5'>전공</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>기간</td>
		<td width="150" bgcolor='f5f5f5'>주야</td>
		<td width="150" bgcolor='f5f5f5'>학점</td>
		<td width="150" bgcolor='f5f5f5'>졸업구분</td>
		<td width="150" bgcolor='f5f5f5'>구분</td>
		<td width="150" bgcolor='f5f5f5'>학교명</td>
		<td width="150" bgcolor='f5f5f5'>전공</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>기간</td>
		<td width="150" bgcolor='f5f5f5'>주야</td>
		<td width="150" bgcolor='f5f5f5'>학점</td>
		<td width="150" bgcolor='f5f5f5'>졸업구분</td>

		<!-- 직무자격 -->
		<td width="150" bgcolor='f5f5f5'>직무자격증</td>
		<td width="150" bgcolor='f5f5f5'>등급</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>유효일</td>
		<td width="150" bgcolor='f5f5f5'>직무자격증</td>
		<td width="150" bgcolor='f5f5f5'>등급</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>유효일</td>
		<td width="150" bgcolor='f5f5f5'>직무자격증</td>
		<td width="150" bgcolor='f5f5f5'>등급</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>유효일</td>
		<td width="150" bgcolor='f5f5f5'>직무자격증</td>
		<td width="150" bgcolor='f5f5f5'>등급</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>유효일</td>
		<td width="150" bgcolor='f5f5f5'>직무자격증</td>
		<td width="150" bgcolor='f5f5f5'>등급</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>유효일</td>


		<!-- 어학(회화) -->
		<td width="150" bgcolor='f5f5f5'>외국어</td>
		<td width="150" bgcolor='f5f5f5'>TEST명</td>
		<td width="150" bgcolor='f5f5f5'>성적</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>외국어</td>
		<td width="150" bgcolor='f5f5f5'>TEST명</td>
		<td width="150" bgcolor='f5f5f5'>성적</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>외국어</td>
		<td width="150" bgcolor='f5f5f5'>TEST명</td>
		<td width="150" bgcolor='f5f5f5'>성적</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>외국어</td>
		<td width="150" bgcolor='f5f5f5'>TEST명</td>
		<td width="150" bgcolor='f5f5f5'>성적</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>
		<td width="150" bgcolor='f5f5f5'>외국어</td>
		<td width="150" bgcolor='f5f5f5'>TEST명</td>
		<td width="150" bgcolor='f5f5f5'>성적</td>
		<td width="150" bgcolor='f5f5f5'>취득일</td>

		<!-- 경력사항 -->
		<td width="150" bgcolor='f5f5f5'>근무기간</td>
		<td width="150" bgcolor='f5f5f5'>직장명</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>직급</td>
		<td width="150" bgcolor='f5f5f5'>Status</td>
		<td width="150" bgcolor='f5f5f5'>직무(담당업무)</td>
		<td width="150" bgcolor='f5f5f5'>근무기간</td>
		<td width="150" bgcolor='f5f5f5'>직장명</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>직급</td>
		<td width="150" bgcolor='f5f5f5'>Status</td>
		<td width="150" bgcolor='f5f5f5'>직무(담당업무)</td>
		<td width="150" bgcolor='f5f5f5'>근무기간</td>
		<td width="150" bgcolor='f5f5f5'>직장명</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>직급</td>
		<td width="150" bgcolor='f5f5f5'>Status</td>
		<td width="150" bgcolor='f5f5f5'>직무(담당업무)</td>
		<td width="150" bgcolor='f5f5f5'>근무기간</td>
		<td width="150" bgcolor='f5f5f5'>직장명</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>직급</td>
		<td width="150" bgcolor='f5f5f5'>Status</td>
		<td width="150" bgcolor='f5f5f5'>직무(담당업무)</td>
		<td width="150" bgcolor='f5f5f5'>근무기간</td>
		<td width="150" bgcolor='f5f5f5'>직장명</td>
		<td width="150" bgcolor='f5f5f5'>지역</td>
		<td width="150" bgcolor='f5f5f5'>직급</td>
		<td width="150" bgcolor='f5f5f5'>Status</td>
		<td width="150" bgcolor='f5f5f5'>직무(담당업무)</td>
		<td width="150" bgcolor='f5f5f5'>지원동기(이직사유),입사 후 포부</td>
		<td width="150" bgcolor='f5f5f5'>보유기술(핵심역량)</td>
		<td width="150" bgcolor='f5f5f5'>주요 수행과제,본인 역할/기여도 요약 *'세부 수행과제 및 성과'에 상세하게 작성</td>
		<td width="150" bgcolor='f5f5f5'>논문실적,특허출원내역,수상내역</td>
		<td width="150" bgcolor='f5f5f5'>본인의 강점, 보완점(업무, 성격등)</td>
		<td width="150" bgcolor='f5f5f5'>세부 수행과제 및 성과</td>
	</tr>

<?
		//기본사항
		$query = "select * from hk_sub661";
		$result2 = mysqli_query($dbc,$query);

		while($row = mysqli_fetch_array($result2)) {
			$uid = $row['uid'];
			$name = $row['name'];
			$e_name = $row['e_name'];
			$birth = $row['birth'];
			$country = $row['country'];
			$h_field = $row['h_field'];
			$addr01 = $row['addr01'];
			$s_phone = $row['s_phone'];
			$t_phone = $row['t_phone'];
			$military = $row['military'];
			$army = $row['army'];
			$a_class = $row['a_class'];
			$e_reason = $row['e_reason'];
			
			$m_period = $row['m_period'];
			$m_period02= $row['m_period02'];
	
			$motive = $row["motive"];
			$skill = $row["skill"];
			$task01 = $row["task01"];
			$pfmce = $row["pfmce"];
			$advantage = $row["advantage"];
			$task02 = $row["task02"];

?>

	<tr align='center' height='30'>
		<td><?=$name?></td>
		<td><?=$e_name?></td>
		<td><?=$birth?></td>
		<td><?=$country?></td>
		<td><?=$h_field?></td>
		<td><?=$addr01?></td>
		<td><?=$s_phone?></td>		
		<td><?=$t_phone?></td>		
		<td><?=$email?></td>		
		<td><?=$military?></td>		
		<td><?=$army?></td>		
		<td><?=$a_class?></td>		
		<td><?=$e_reason?></td>		
		<td><?=$m_period?>&nbsp;~&nbsp;<?=$m_period02?></td>				

<?

		//학력사항
		$query = "select * from hk_sub662 where puid = '$uid'";
		$result = mysqli_query($dbc,$query);
		$num = mysqli_num_rows($result);
		for($i=0; $i<5; $i++) {
		
			$row = mysqli_fetch_array($result);

			$gubun = $row["gubun"];
			$s_name = $row["s_name"];	
			$major = $row["major"];
			$area01 = $row["area01"];
			$h_date01 = $row["h_date01"];
			$h_date02 = $row["h_date02"];
			$jhselect = $row["jhselect"];
			$c_credit = $row["c_credit"];
			$j_gubun = $row["j_gubun"];

?>

			<td><?=$gubun?></td>
			<td><?=$s_name?></td>
			<td><?=$major?></td>
			<td><?=$area01?></td>
			<td><?=$h_date01?>&nbsp;~&nbsp;<?=$h_date02?></td>
			<td><?=$jhselect?></td>
			<td><?=$c_credit?></td>
			<td><?=$j_gubun?></td>
<?
		}	
	
	//직무자격
	$query = "select * from hk_sub663 where puid = '$uid'";
	$result =  mysqli_query($dbc,$query);
	$num = mysqli_num_rows($result);
	for($i=0; $i<5; $i++) {

		$row = mysqli_fetch_array($result);

		$license = $row["license"];
		$rank = $row["rank"];
		$a_date011 = $row["a_date011"];
		$v_date01 = $row["v_date01"];
	

?>

		<td><?=$license?></td>
		<td><?=$rank?></td>
		<td><?=$a_date011?>~<?=$v_date01?></td>
	
<?

		}	
		//어학(회화)
		$query = "select * from hk_sub664 where puid = '$uid'";
		$result =  mysqli_query($dbc,$query);
		
		for($i=0; $i<5; $i++) {		
			$row = mysqli_fetch_array($result);

			$language = $row["language"];
			$t_name = $row["t_name"];
			$grade = $row["grade"];
			$a_date022 = $row["a_date022"];

?>

		<td><?=$language?></td>
		<td><?=$t_name?></td>
		<td><?=$grade?></td>
		<td><?=$a_date022?></td>

<?
		}
?>

<?
		//업무사항
		$query = "select * from hk_sub665 where puid = '$uid'";
		$result =  mysqli_query($dbc,$query);
		for($i=0; $i<5; $i++) {

			$row = mysqli_fetch_array($result);


			$w_date011 = $row["w_date011"];
			$w_date022 = $row["w_date022"];
			$n_work = $row["n_work"];
			$area02 = $row["area02"];
			$position = $row["position"];
			$status = $row["status"];
			$job = $row["job"];

?>

		<td><?=$w_date011?> ~ <?=$w_date022?></td>
		<td><?=$n_work?></td>
		<td><?=$position?></td>
		<td><?=$status?></td>
		<td><?=$job?></td>
<?
		}	
?>
		<td><?=$motive?></td>
		<td><?=$skill?></td>
		<td><?=$task01?></td>
		<td><?=$pfmce?></td>
		<td><?=$advantage?></td>
		<td><?=$task02?></td>
<?
	}	
?>
</table>
