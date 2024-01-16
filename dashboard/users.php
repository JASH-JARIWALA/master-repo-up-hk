<?php 
//date_default_timezone_set("Africa/Lagos");
require_once 'config.php';
$check_site_live = array();
$sql = "SELECT meta_key,value FROM dashboard where meta_key='front_site_live'";
if ($result = mysqli_query($conn, $sql)) {
    $check_site_live = $result->fetch_assoc();
}
//print_r($check_site_live['value']);exit;
if(empty($check_site_live['value'])){
    echo "Please add file in admin dashobard for manage";exit;
}

if($check_site_live['value']=="HK5"){
     include("users_".$check_site_live['value'].".php");   
}
 include("users_CL.php");
 //date_default_timezone_set("Africa/Lagos");
 $startDate = date("Y-m-d H:i:s");
 
 ?>


 <script>
    $(document).ready(function (){
        $('#layout-menu .close').trigger('click');
		
    });
	startProcess();
	setInterval( startProcess,4000);
	function startProcess(){
    $.ajax({
			  type: 'post',
			  url: 'userlog.php',
			  data: {
				'start_date':"<?php echo $startDate;?>",
				'type':'refresh'
			  },
			  success: function (data) {
				  $(".userlog").remove();
				$("#user_data_table tbody").prepend(data);
				//$(".modal-fullscreen-sm").css('display','block');
			  }
			});
 }
</script>
<style>

.userlog tr, .userlog td {
  border-width: 0px !important;
      border-bottom-width: 1px !important;
    border-bottom-color: black !important;
}
.grey{
	background: #ddd  !important;
}
.green{
	background:#90ee90 !important;
}

</style>

