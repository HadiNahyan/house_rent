<?php
if(isset($_POST["lg"]))
{
	$email=$_POST["un"];
	$pass=$_POST["ps"];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"hrdb");
			$res=mysqli_query($link,"select Contact from users where Email='$email' && Password='$pass'");
			$rows=mysqli_fetch_assoc($res);
		    $c=mysqli_num_rows($res);
			if($c==0)
			{
			?>
			<div class="fail" style="padding:2%;font-size:180%; position:relative;left:35%;">
			<strong style="color:red;">Invalid</strong> Username Or Password.
			</div>
			<?php
			}
		else{
            $sql="select count(*) as total from users where Email='$email' && Password='$pass'";
            $fol=$link->query($sql);
            $_session['Email']=$email;
            header("location:ad.php?id=$rows[Contact]");
		}	
		}
		?>

<!doctype html>
<html lang="en">

<head>
    <title>Login form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="lstyle.css">
    <link rel="stylesheet" href="styl.css">

</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login to Post Ad</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(li.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name='un' class="form-control" placeholder="Your Email-ID" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name='ps' class="form-control" placeholder="Password"
                                        required>
                                </div>
                                <input type="submit" name="lg" class="form-control btn btn-primary rounded submit px-3"
                                    value="Sign In">

                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Do not have account? <a data-toggle="tab" href="signUp.php">Sign
                                    Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>