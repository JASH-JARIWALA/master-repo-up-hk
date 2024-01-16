<?php 
include('./config.php');
//date_default_timezone_set("Africa/Lagos");
$startDate = $_POST['start_date'];
$date = date("Y-m-d H:i:s",strtotime("-15 second",strtotime(date("Y-m-d H:i:s"))));
 $sql = " SELECT * FROM `user_log` WHERE  (ulog_last_updated >= '$date' and ulog_deleted=0) or ( ulog_submitted>='$startDate') order by ulog_submitted desc,ulog_id desc ";
$result = mysqli_query($conn, $sql) or mysqli_error();


?>

<?php 
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            

	?>
	<tr class="userlog <?php echo ($row['ulog_type']>0)?'green':'grey'?>">
	<td>#<?php echo $row['ulog_id'];?> <br/>
	<?php echo $row['ulog_last_updated'];?></td>
	<td><?php echo $row['ulog_text'];?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td> <div class="online"><span class="tooltiptext">Online</span></div></td>
	<td></td>
	<td></td>
	</tr>
	<?php 
	
}
