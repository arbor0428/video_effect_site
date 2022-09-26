<?

	include '/home/crob/www/adm/header.php';
	
	if(!$type) $type = 'list';

?>

	<tr>
		<td width='200' valign='top' class='mCon'>
		<?
			$sNum01 = '1';
			$sNum02 = '5';

			include '../include/side_menu.php';
		?>
		</td>
		<td valign='top' class='aCon'>
			<table cellpadding='0' cellspacing='0' border='0' width='1200'>
				<tr>
					<td>

					<?
						
						if($type == 'list')				include 'list02.php';
						elseif($type == 'view')		include 'view02.php';

					?>

					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<?
	include "../footer.php";
?>
