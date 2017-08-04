<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Michelin ClassRoom</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('assets/css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('assets/css/bootstrap-responsive.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('assets/css/matrix-login.css');?>" />
        <link href="<?php echo $view['assets']->getUrl('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />


    </head>
    <body>
        <div id="loginbox">       
    				 <div class="control-group normal_text"> <h3>Michelin ClassRoom</h3></div>
            <form id="loginform" class="form-vertical" action="">
				 <div class="normal_text" id="errorMsg" style="display: none"> <h5>Invalid Login...!</h5></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
				<input id="username" name="username" type="text" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>

				<input type="password" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right">
		<button type="button"  class="btn btn-success" onclick="submitForm()"/> Login</button></span>
                </div>
            </form>
           
        </div>
        
        <script src="<?php echo $view['assets']->getUrl('assets/js/jquery.min.js'); ?>"></script>  
        <script src="<?php echo $view['assets']->getUrl('assets/js/matrix.login.js'); ?>"></script> 

<script>
function submitForm(){

		var username=$('#username').val();
		var password=$('#password').val();
	 	$.get( "getFunction",{ type:'LoginCheck',username : username,password : password},function(data) {
			var result=parseInt(data);
			if(result==1){
				window.location.href = "adminMaster?master=Customer";
			}
			else if(result==2){
				window.location.href = "adminMaster?master=Employee";
			}
			else{
				$("#errorMsg").css("display", "block");
				$( "#username" ).focus();
				$('#loginform')[0].reset();
					
			}				
	
  		})	
	
}
</script>
    </body>

</html>
