
<?php
$creds = file_get_contents("controller/creds.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Extreme Packaging BANGLADESH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	<div id="cred" style="display:none"><?php echo $creds; ?></div>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<span class="login100-form-title p-b-49">
					Bangaldesh Packaging LTD
				</span>

				<div class="container-login100-form-btn m-b-23">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Welcome
						</button>
					</div>
				</div>

				<div class="login100-form validate-form">



					<div class="wrap-input100 validate-input m-b-23" data-validate = "Mail is required">
						<span class="label-input100">Enter Mail</span>
						<input class="input100" type="email" name="uname" id="mail" placeholder="Type your mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 pwd" type="password" name="psw" id="psw" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<button class="btn btn-default reveal" type="button" style="float:right;margin-top: -35px;
  position: relative;
  z-index: 2;"><i class="glyphicon glyphicon-eye-open"></i></button>
					</div>



					<div class="text-right p-t-8 p-b-31">
						<a href="#">

						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="login()">
								Login
							</button>
						</div>
					</div>






				</div>
				<p style="text-align:center; margin:10px">or </p>

				<div class="container-login100-form-btn" style="margin-top:10px">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" onclick="window.location.href='signup.php'">
							Sign Up
						</button>
					</div>
				</div>

				<div id="errormsg" style="margin:50px;">
				</div>


			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script>
	$(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
 function login(){
	 var data = document.getElementById('cred');
	 data = data.textContent;
	 console.log(data);
	 data = data.split("!!~~*~~!!");
	 console.log(data);

	 var mail = document.getElementById('mail').value;
	 var psw = document.getElementById('psw').value;
	 console.log(mail,psw);

	 var credmail = data[0];
	 var credpsw = data[1];
	 if(credmail.localeCompare(mail)==0){
		 if(credpsw.localeCompare(psw)==0){
			 window.location.href = 'measurement.php';
		 }
		 else{
			 console.log("pass mile na");
			 document.getElementById('errormsg').innerHTML=

	     `<div class="card bg-danger text-white text-center p-3">
	         <blockquote class="blockquote mb-0">
	         <p style="text-align:center; color:white">PASSWORD DOESN'T MATCH</p>


	         </blockquote>
	       </div>`;
		 }
	 }
	 else{
		 console.log("mail mile na");
		 document.getElementById('errormsg').innerHTML=

     `<div class="card bg-danger text-white text-center p-3">
         <blockquote class="blockquote mb-0">
         <p style="text-align:center; color:white">MAIL DOESN'T MATCH</p>


         </blockquote>
       </div>`;
	 }
 }

</script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>