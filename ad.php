<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"hrdb")or die(mysqli_error($link));
$con=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="bd">
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

<div class="cont">
<h1 class="hd1">Houses To Rent</h1>
<h2 class="hd1">Find The Best House for you to Rent<a href="post.php?id=<?php echo $con ?>" class=pBtn>Click to Post An Ad </a></h2>
  <table class="tab">
      <tr>
        <th>Area</th>
        <th>Rent</th>
        <th>Floor</th>
        <th>BedRoom</th>
        <th>BathRoom</th>
        <th>Corridore</th>
        <th>Gas</th>
        <th>Edit</th>
        <th>Update</th>
      </tr>      
    <tbody>
    </tbody>
    <?php
    $query="select * from house where Contact='$con'";
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
           <td> <a href="edit.php?id=<?php echo $rows["ID"];?>"><button type="button" class="btnE">Edit</buttn></a><?php echo "</td";?></td>
            <td> <a href="delete.php?id=<?php echo $rows["ID"];?>&cid=<?php echo "$con";?>"><button type="button" class="btnD">Delete</buttn></a><?php echo "</td";?> </td>
        </tr>
        <?php
      
    }
    ?>
  </table>
</div>

</body>
</html>
