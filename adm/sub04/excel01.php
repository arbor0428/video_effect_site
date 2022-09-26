<?

	include '../../module/class/class.DbCon.php';
	include '../../module/class/class.Util.php';


	//쿼리조건
	$query_ment = "";

	if($f_status) $query_ment .= " where $f_field like '%$f_status%'"; // 구분

	$sort_ment = "order by uid asc";

	$query = "select * from hk_sub72 $query_ment $sort_ment";

	$result = mysqli_query($dbc,$query) or die("연결실패");
	
	$total_record =  mysqli_num_rows($result);

	$file_name = date("흥국산업 견적요청 Y년 m월 d일");
	
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

		<td width="150" bgcolor='f5f5f5'>No</td>
		<td width="150" bgcolor='f5f5f5'>담당자</td>
		<td width="150" bgcolor='f5f5f5'>휴대폰번호</td>
		<td width="150" bgcolor='f5f5f5'>납품장소</td>
		<td width="150" bgcolor='f5f5f5'>납품날짜</td>
		<td width="150" bgcolor='f5f5f5'>품명</td>
		<td width="150" bgcolor='f5f5f5'>강도</td>
		<td width="150" bgcolor='f5f5f5'>슬럼프</td>
		<td width="150" bgcolor='f5f5f5'>배합</td>
		<td width="150" bgcolor='f5f5f5'>필요수량</td>
	</tr>

<?

	$no = 1;
	if($total_record != '0') {

		while($row = mysqli_fetch_array($result)) {
			
			$name = $row["name"];
			$mobile = $row["mobile"];
			$place01 = $row["place01"];
			$d_date = $row["d_date"];
			$d_date02 = $row["d_date02"];
			$d_date03 = $row["d_date03"];
			$p_status01 = $row["p_status01"];
			$strong = $row["strong"];
			$slump = $row["slump"];
			$baehab = $row["baehab"];
			$needs = $row["needs"];
			$rDate = $row["rDate"];

?>

	<tr align='center' height='30'>
		<td><?=$no?></td>
		<td><?=$name?></td>
		<td><?=$mobile?></td>
		<td><?=$place01?></td>
		<td><?=$d_date?><?=$d_date02?><?=$d_date03?></td>
		<td><?=$p_status01?></td>
		<td><?=$strong?></td>
		<td><?=$slump?></td>
		<td><?=$baehab?></td>
		<td><?=$needs?></td>
		<td><?=$rDate?></td>
		<!-- <td><?=$rTime?></td> -->
	</tr>

<?

			$no++;
		}
	}
?>

</table>
