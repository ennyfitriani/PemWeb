<?php
require 'bootst.php';
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Login</title>
  </head>
  <body>
  <div class="main">
  <div class="card border-bottom shadow-lg p-3 mb-5 bg-body rounded" style="margin:170px 580px 0px 570px; width:550px; height:550px">
    <div style="padding : 35px;" >
      <div class="header-main" align="center">
        <img src="Logo.png" alt="Logo" style="width:120px;height:140px;margin-bottom:30px;">
        <h3 class=primary>LOGIN</h3>
      </div>
      <div class=container style="margin-left:60px; margin-top:30px">
      <form  method="post" action="login_action.php">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" style="width:300px"id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" style="width:300px" id="password">
        </div>
        <button type="submit" class="btn btn-primary" name ="login">LOGIN</button>
      </form>
      </div>
      <div align="center" style="margin-top:10px;">
      <i style="text-align:center;color:red">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "username atau password anda salah";
			}
		}
		?>	
      </i>
      </div>
    </div> 
	</div> 
  </body>

</html>
