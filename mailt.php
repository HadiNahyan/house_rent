<?php
include "conn.php";
$id=$_GET['id'];
$mob=$_GET['cid'];
if(isset($_POST["lg"]))
{
$nm=$_POST["nam"];
$ml=$_POST["un"];
$pn=$_POST["pn"];
$fm=$_POST["fm"];
$soi=$_POST["si"];
?>
<script type="text/javascript">
    window.location="maild.php?id=<?php echo $id;?>&cid=<?php echo $mob;?>&pn=<?php echo $pn;?>&name=<?php echo $nm;?>&ml=<?php echo $ml;?>&fm=<?php echo $fm;?>&soi=<?php echo $soi;?>";
    </script>
    <?php
    }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="lstyle.css">
    <link rel="stylesheet" href="styl.css">

</head>

<body>
    <section>
        <a class="hNav" href="home.php">Home</a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Send a Booking Request</h2>
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
                                    <h3 class="mb-4">Provide Your Information</h3>
                                </div>
                            </div>
                            <form action="#" method="post" class="signin-form">
                            <div class="form-group mb-3">
                                    <label class="label">Name</label>
                                    <input type="text" name='nam' class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" name='un' class="form-control" placeholder="Your Email-ID" required>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label class="label">Phone number</label>
                                    <input type="number" name='pn' class="form-control" placeholder="Phone Number"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label">Source of income</label>
                                    <input type="text" name='si' class="form-control" placeholder="Profession" required>
                                </div>
                                 
                                <div class="form-group mb-3">
                                    <label class="label">Number of Family Members</label>
                                    <input type="number" name='fm' class="form-control" placeholder="Family Member"
                                        required>
                                </div>
                                <input type="submit" name="lg" class="form-control btn btn-primary rounded submit px-3"
                                    value="Send a request">              
                                </div>
                               
                            </form>
                           
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