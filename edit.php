<?php
include "conn.php";

$id=$_GET['id'];
$ar="";
$cst="";
$flr="";
$bd="";
$bt="";
$cd="";
$gs="";
$cn="";
$res=mysqli_query($link,"select * from house where ID=$id");
while($row=mysqli_fetch_array($res))
{
    $ar=$row["Area"];
    $cst=$row["Cost"];
    $flr=$row["Floor"];
    $bd=$row["BedRoom"];
    $bt=$row["BathRoom"];
    $cd=$row["Corridore"];
    $gs=$row["Gas"];
    $cn=$row["Contact"];
}
?>
<html lang="en">

<head>
    <title>Post Ad Of Your House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="show.php">Rent A House :) </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="signUp.php">Sign Up</a></li>
      <li><a href="login.php">Post Ad</a></li>
    </ul>
  </div>
</nav><h2 style="    font-size: 240%;
    width: fit-content;
    border: double;
    padding: 0.5%;
    margin: auto;
    margin-bottom: 2%;
    background-color: #55aeb56b;">Update Your Ad</h2>
    <div class="container">
        <form class="form-horizontal"  action="#" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">Area</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="area" type="text"
                        placeholder="Amborkhana, Bondor etc." value="<?php echo $ar ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Rental Cost</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="rent" type="text" placeholder="1000-50000" value="<?php echo $cst ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Floor</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="floor" type="text"
                        placeholder="Which Floor to give rent" value="<?php echo $flr ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">BedRoom</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="bed" type="text"
                        placeholder="Numbers of Bed Rooms" value="<?php echo $bd ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">BathRoom</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="bath" type="text"
                        placeholder="Numbers of Bath Rooms" value="<?php echo $bt ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Corridore</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="cord" type="text"
                        placeholder="Numbers of Bed Corridorse"value="<?php echo $cd ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleFormControlSelect1">Gas</label>
                <div class="col-sm-8">
                    <select class="form-control" id="exampleFormControlSelect1" name="gas" >
                        <option>Lined Gas</option>
                        <option>Cylindered Gas</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Contact</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="con" type="text"
                        placeholder="01828000000" value="<?php echo $cn ?>">
                </div>
            </div>
            <button type="submit"  name="update" class="bt">Update ad</button>
        </form>

<?php
  if(isset($_POST["update"]))
  {
      $cn=$_POST['con'];
    mysqli_query($link,"update house set Area='$_POST[area]',Cost='$_POST[rent]',Floor='$_POST[floor]',BedRoom='$_POST[bed]',BathRoom='$_POST[bath]',Corridore='$_POST[cord]',Gas='$_POST[gas]',Contact='$_POST[con]'where ID=$id"); 

 ?>
 <script type="text/javascript">
   window.location="ad.php?id=<?php echo $cn ;?>";
  </script>
  <?php

}
?>
</div>
</body>

</html>
