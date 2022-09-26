<?

	include "./module/class/class.DbCon.php";



	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){


		
		$query = "select * from tb_board_list";
		$result = mysqli_query($dbc,$query);

		//$query = "desc hk_sub65";
		//$result = mysqli_query($dbc,$query);

		$num = mysqli_num_rows($result);
		echo$num.'<br>';
		while($row = mysqli_fetch_array($result) ){

			for($i=0;$i<8;$i++){
				echo $row[$i].' / ';
			}

				echo '<br>';
		}

	} 
?>
