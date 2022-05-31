<?php
include "conn.php";
$mob=$_GET["id"];
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
   <a href="show.php"> <button class="btn btn-danger navbar-btn">Find House</button></a>
  </div>
</nav>
<h2 style="    font-size: 240%;
    width: fit-content;
    border: double;
    padding: 0.5%;
    margin: auto;
    margin-bottom: 2%;
    background-color: #55aeb56b;">Post Your Ad</h2>
    <div class="container">
        <form class="form-horizontal"  action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Area</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="area" type="text"
                        placeholder="Amborkhana, Bondor etc." required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Rental Cost</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="rent" type="text" placeholder="1000-50000" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Floor</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="floor" type="text"
                        placeholder="Which Floor to give rent" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">BedRoom</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="bed" type="text"
                        placeholder="Numbers of Bed Rooms" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">BathRoom</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="bath" type="text"
                        placeholder="Numbers of Bath Rooms" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Corridore</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="cord" type="text"
                        placeholder="Numbers of Bed Corridorse" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="exampleFormControlSelect1">Gas</label>
                <div class="col-sm-8">
                    <select class="form-control" id="exampleFormControlSelect1" name="gas">
                        <option>Lined Gas</option>
                        <option>Cylindered Gas</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Contact</label>
                <div class="col-sm-8">
                    <input class="form-control" id="focusedInput" name="con" type="text"
                        value="<?php echo $mob ?>"required>
                </div>
            </div>
            <label for="files">Select At Least 3 images</label>
            <input type="file" id="files" name="images[]"  multiple required>
            <button type="submit"  name="insert" class="bt">Post Your Ad</button>
        </form>

        <?php
  if(isset($_POST["insert"]))
  {
      $mob=$_POST['con'];
    mysqli_query($link,"insert into house values(NULL,'$_POST[area]','$_POST[rent]','$_POST[floor]','$_POST[bed]','$_POST[bath]','$_POST[cord]','$_POST[gas]','$_POST[con]')");
   $idP=mysqli_insert_id($link);
  $img='';
  foreach($_FILES['images'] ['name']as $key => $image){
      $imageName= $_FILES['images']['name'][$key];
      $imageTmpName= $_FILES['images']['tmp_name'][$key];
      $directory='images/'.$imageName;
      if(move_uploaded_file($imageTmpName, $directory)){
       $com="insert into images values(NULL,'$imageName','$directory','$idP')";
        $result= mysqli_query($link,$com);
      }
     $result= move_uploaded_file($imageTmpName, $directory.$imageName);
  }
   ?>
    <script type="text/javascript">
       window.location="ad.php?id=<?php echo $mob ?>";
     //header('location:ad.php');
     </script>
     <?php
  }
?>
</div>
</body>

</html>

