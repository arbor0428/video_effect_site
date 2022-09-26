<?
	include "../module/class/class.DbCon.php";
	include "../module/class/class.Msg.php";
	include "../module/class/class.Util.php";


	$userip = $_SERVER['REMOTE_ADDR'];
	$rDate = date('Y-m-d H:i:s');
	$rTime = mktime();

		
	if($ment)		$ment = Util::TextAreaEncodeing($ment);

	if($type == 'write'){
		$sql = "insert into ks_form (email,name,address,ment,userip,rDate,rTime) values ";
		$sql .= "('$email','$name','$address','$ment','$userip','$rDate','$rTime')";
		$result = mysqli_query($dbc, $sql);

		$msg = '등록되었습니다';
		$type = 'list';
		include'email.php';

		$url='/sub04/sub01.php#sec02';


	}elseif($type == 'edit'){
		$sql = "update ks_form set ";			
		$sql .= "email='$email', ";
		$sql .= "name='$name', ";
		$sql .= "address='$address', ";
		$sql .= "ment='$ment' ";
		$sql .= "where uid=$uid";
		$result = mysqli_query($dbc, $sql);

		$msg = '수정되었습니다';
		$type = 'list';
		$uid = '';

		$url='/sub04/sub01.php#sec02';



	}elseif($type == 'del'){

		$sql = "delete from ks_form where uid='$uid'";
		$result = mysqli_query($dbc, $sql);

		$msg = '삭제되었습니다';

		$type = 'list';
		$uid = '';

		$url='/adm/formlist/up_index01.php';

	}


	Msg::goMsg($msg, $url);
	exit;

?>