<?php
	session_start();
	
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['unametxt'];
		$pwd=$_POST['pwdtxt'];
		
		$sql=mysql_query("SELECT * FROM users_tbl
								WHERE username='$uname' AND password='$pwd' 
								
							");
						
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
					if($row['type']=='admin')
						$msg="Login trov hery!.....";	
					else
						header("location: everyone.php");
					
			}
			
			else
					$msg="Invalid login authentication, try again!";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/login.css" /> -->

<title> BIMT College management System</title>
<style>
	
	body{
	background: url('images/BIMT_logo.png') no-repeat top center;
	background-size: 50%;
	background-position: 1% 30%;
}



.container {
    margin-left: 58%;
    width: 41%;
    margin-top: 40px;
    height: 569px;
    border-left: 1px solid #d6d6d6;
    }
    
    .container2{
        width: 80%;
        float: right;
        margin-top: 150px;
    }
    
    input{
        margin-top:8px;
    }
    
    @font-face {
        font-family: 'Segoe UI Light';
        src: url('.././font/segoeuil.ttf');
    }
    
    h1{
        font-family: 'Segoe UI Light';
        font-weight: 200;
        font-style: normal;
        font-size: 2.15em;
    }
    
    .h1_pos{
        margin-top:-120px;
    }
    
    .about_pos {
    margin-top: 200px;
    margin-left: 180px;
    }
    
    .panel {
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
    -webkit-box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
    -moz-box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
    box-shadow: 0px -1px 20px 0px rgba(50, 50, 50, 0.48);
    }
</style>
</head>

<body >
	<div class="container">
    	<div class="container2">
    		<div class="h1_pos">
    			<h1>College authorities for only staff members. </h1>
    		</div><br><br><br>
    		<form method="post">
                    <input type="text" class="form-control" name="unametxt" placeholder="Username" title="Enter username here" /><br>
                    <input type="password" class="form-control" name="pwdtxt" placeholder="Password" title="Enter username here" /><br>
    		<input type="submit" href="#" class="btn btn-default" name="btn_log" value="Sign in" style="float: right;"/>
    		<div class="about_pos">
                    <a href="AboutManagement.php" style="text-decoration:none; color: silver">About management</a>
    		</div>
    		</form>
    	</div>
    </div>
	
	<h2 style="color: #3a28a5; text-align: center;">
            <?php echo $msg; ?>
        </h2>    
</body>
</html>