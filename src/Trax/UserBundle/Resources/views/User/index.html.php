<html lang="en">
<head>
<meta charset="utf-8">
<title>Michelin</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('user/css/stylelogin.css') ?>" type="text/css" media="all">
</head>
<body>
<div class="container">
	<section id="content">
<img src="<?php echo $view['assets']->getUrl('user/images/michelin_logo.png') ?>" class="img-responsive" >
		<form action="" method="post" name="loginform" id="loginform">
			<h1>Login Form</h1>
			<div id="errorMsg"></div>
			<div>
				<input type="text" placeholder="Username" name="username" required="username" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" name="password" required="password" id="password" />
			</div>
			<div >
				<input class="btn btn-primary" type="button" value="Login" id="submit" name="submit" onclick="submitForm();" />
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
			</div>
		</form>
	</section>
</div>
</body>

</html>
		<script src="<?php echo $view['assets']->getUrl('user/js/jquery.min.js'); ?>"></script>
<script>
function submitForm(){

		var username=$('#username').val();
		var password=$('#password').val();
	 	$.get( "userFunction",{ type:'LoginCheck',username : username,password : password},function(data) {
			var result=parseInt(data);
			if(result=='Employee'){
				window.location.href = "portlet";
			}
			else if(result=='4'){
				window.location.href = "modulemaster?type=Trainee";
			}
			else if(result=='2'){
				window.location.href = "manage/adminMaster?master=Employee";
			}
			else{
				$("#errorMsg").html("Invalid username or Password...!");
				$( "#username" ).focus();
				$('#loginform')[0].reset();
					
			}				
	
  		})	
	
}
</script>
