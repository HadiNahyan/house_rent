<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"hrdb")or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find House</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="bd">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="show.php">Rent A House :) </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="signUp.php">Sign Up</a></li>
      <li><a href="login.php">Post Ad</a></li>
    </ul>
   <a href="show.php"> <button class="btn btn-danger navbar-btn">Find House</button></a>
  </div>
</nav>
<div class="cont">
<h1 class="hd1">Houses To Rent</h1>
<form action="" method="post">
<div class="sr">
<input type="text" name="search" value="<?php  
if(isset($_POST['sButton']))
    {
      $sr=$_POST['search'];
      echo $sr;
    }
      else{
        echo "";
      }?>"class="sBar"  placeholder="Search house by Area or Cost">
<button type="submit" name=" sButton"class="sBtn">Search
</button>
</div></form>
<h2>Find The Best House for you to Rent</h2>
<a href="t.php" style="color:white;">আমারে কেউ ছইও নাগো সজনী</a>
  <table class="tab">
      <tr>
        <th>Area</th>
        <th>Rent</th>
        <th>Floor</th>
        <th>BedRoom</th>
        <th>BathRoom</th>
        <th>Corridore</th>
        <th>Gas</th>
        <th>Contact</th>
      </tr>      
    <tbody>
    </tbody>
    <?php 
    if(isset($_POST['sButton']))
    {
      $sr=$_POST['search'];
      $rnt = intval( $sr );
      $query="select * from house where Area like '%$sr%' or Cost <='$rnt'";
      $res=mysqli_query($link,$query);
      $c=mysqli_num_rows($res);
      if($c==0)
      {
        notFound();
      }
      else {
      while($rows=mysqli_fetch_assoc($res))
      {
          ?>
          <tr>
              <td><?php echo $rows['Area'] ?></td>
              <td><?php echo $rows['Cost'] ?></td>
              <td><?php echo $rows['Floor'] ?></td>
              <td><?php echo $rows['BedRoom'] ?></td>
              <td><?php echo $rows['BathRoom'] ?></td>
              <td><?php echo $rows['Corridore'] ?></td>
              <td><?php echo $rows['Gas'] ?></td>
              <td><?php echo $rows['Contact'] ?></td>
  
          </tr>
          <?php
        
      }
    }
  }
      else{
        $query="select * from house";
        $res=mysqli_query($link,$query);
       while($rows=mysqli_fetch_assoc($res))
        {
            ?>
            <tr>
                <td><?php echo $rows['Area'] ?></td>
                <td><?php echo $rows['Cost'] ?></td>
                <td><?php echo $rows['Floor'] ?></td>
                <td><?php echo $rows['BedRoom'] ?></td>
                <td><?php echo $rows['BathRoom'] ?></td>
                <td><?php echo $rows['Corridore'] ?></td>
                <td><?php echo $rows['Gas'] ?></td>
                <td><?php echo $rows['Contact'] ?></td>
    
            </tr>
            <?php
          
        }
      }
    ?>
  </table>
</div>
<?php
function notFound(){
 ?>
 <div class="fail" style="
    padding: 1%;
    font-size: 180%;
    position: relative;">
     <strong style="color:black;" Sorry!> Sorry, no data has been found!</strong>
     </div>
     <?php
}
?>
</body>
</html>