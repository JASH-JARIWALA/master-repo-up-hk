 <?php 
include("authorizationcode.php");
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];

$session_id = $_SESSION['loggedin']['session_id'];
$user_id = $_SESSION['loggedin']['id'];


 ?>

<style type="text/css">
  



.countdown {

    text-align: center;
   
    text-transform: uppercase;
    font-weight: bold;
    color:#696cff !important
}

.countdown span {
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    font-size: 15px;
   
}

.countdown span:first-of-type {
    margin-left: 0;
}


.bg-gradient-3 {
    background: #f5f5f9;
    background: -webkit-linear-gradient(to right, #f5f5f9, #f5f5f9);
    background: linear-gradient(to right, ##f5f5f9, #f5f5f9);

    position: fixed;
    bottom: 0;
    left: 0;
    padding: 10px; /* Optional: Add padding for better visibility */
    background-color: #f5f5f9; /* Optional: Set background color */

    width: 262px;
   
}



</style> 

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <span class="close"><i class="menu-icon tf-icons bx bx-list-ul"></i></span>
        <div class="app-brand demo">
          <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 logo-him">CVV LONG</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item <?php if($first_part=="index.php"){echo "active";}?>">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">仪表盘</div> <!-- dashboard -->
            </a>
          </li>
          <li class="menu-item <?php if($first_part=="users.php"){echo "active";}?>">
            <a href="users.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-terminal"></i>
              <div data-i18n="Analytics">操作台</div> <!-- user -->
            </a>
          </li>
          <?php 
          //only admin can view all the
            if($_SESSION["loggedin"]['user_group']=="admin"){ ?>
          <li class="menu-item <?php if($first_part=="setting.php"){echo "active";}?>">
            <a href="setting.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cog"></i>
              <div data-i18n="Analytics">设置</div> <!-- settings -->
            </a>
          </li>
          

          <li class="menu-item <?php if($first_part=="manage_source_code.php"){echo "active";}?> ">
              <a href="manage_source_code.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-code-block"></i>
                  <div data-i18n="Analytics">国家切换</div>
              </a>
          </li>

          <li class="menu-item <?php if($first_part=="add_new_domain.php"){echo "active";}?> ">
              <a href="add_new_domain.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxl-internet-explorer"></i>
                  <div data-i18n="Analytics">域名管理</div>
              </a>
          </li>

          
          <li class="menu-item <?php if($first_part=="user_managment.php"){echo "active";}?> ">
            <a href="user_managment.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">管理员设置</div>
            </a>
          </li>

            <li class="menu-item <?php if($first_part=="block_log.php"){echo "active";}?> ">
                <a href="block_log.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">运行日志</div>
                </a>
            </li>
      

          <li class="menu-item <?php if($first_part=="db_setup_export.php"){echo "active";}?> ">
              <a href="db_setup_export.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-data"></i>
                  <div data-i18n="Analytics">数据库管理</div>
              </a>
          </li>



            <li class="menu-item <?php if($first_part=="getlatest_code_by_git.php"){echo "active";}?> ">
                <a href="getlatest_code_by_git.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-download"></i>
                    <div data-i18n="Analytics">一键更新</div>
                </a>
            </li>

            <?php  }
          ?>


          <li class="menu-item <?php if($first_part=="logout.php"){echo "active";}?>">
            <a href="/admin/logout.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-log-out"></i>
              <div data-i18n="Analytics">登出</div> <!-- Logout -->
            </a>
          </li>


          


          <div class="col-sm-12 bg-gradient-3 " id="countdownMain">
           <p id="countdown" class="countdown"></p>
          </div>

        </ul>
         
      </aside>


      <script type="text/javascript">
        
        function admin_tracking(){

           $.ajax({
              type: 'post',
              url: 'dashboard_functions.php',
              data: {
                'id': '<?php echo $user_id; ?>',
                'session_id': '<?php echo $session_id; ?>',
                'action': 'admin_tracking'
              },
              success: function(data) {
                
              }
            });
        }
        setInterval(admin_tracking, 3000);
      </script>

      <script>
        // Set the target date and time for the countdown
        let localtime_token = localStorage.getItem("auth_token_time");
        //const targetDate = new Date('2023-12-31T00:00:00').getTime();
        const targetDate = localtime_token*1000; //
        const date = new Date(targetDate);

        function updateCountdown() {
            const currentDate = new Date().getTime();
            const timeRemaining = targetDate - currentDate;

            if (timeRemaining <= 0) {
                document.getElementById('countdown').innerHTML = "Countdown expired!";
            } else {
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                let m =  `授权码时间<br><br>`;
                m +=  `&nbsp;<span class="">${days}</span> 天 &nbsp;`;
                m +=  `&nbsp;<span class="">${hours}</span> 时 <br>`;
                m += `&nbsp;<span class="">${minutes}</span> 分 &nbsp;`;
                m += `&nbsp;<span class="">${seconds}</span> 秒`;

                document.getElementById('countdown').innerHTML = m;
                //document.getElementById('countdown').innerHTML = `${days}D ${hours}H ${minutes}M ${seconds}S`;
            }
        }

        // Update the countdown every second
        if(window.location.href.indexOf('dashboard/users.php') <= 0 && window.location.href.indexOf('dashboard/block_log.php') <= 0 ){
            setInterval(updateCountdown, 1000);
        }else{
            document.getElementById('countdownMain').style.display = 'none';
        }
    </script>