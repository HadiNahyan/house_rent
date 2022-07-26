<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: grey; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #181e1ea6; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
    </head>
<title>All Houses to rent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="overflow-x:hidden;background-color:black;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="signUp.php">Sign Up</a></li>
    </ul>
  </div>
</nav>
<div class="cont">
<h3 style="color: white;
    position: relative;
    left: 45%;
    font-family: cursive;
    font-weight: bold;">Houses To Rent</h1>
<form action="" method="post">
<div style="    position: relative;
    left: 42%;
    margin: 0;
    padding-bottom: 1%;">
<input type="text" style="
    width: 15%;
    font-size: 13px;" name="search" value="<?php  
if(isset($_POST['sButton']))
    {
      $sr=$_POST['search'];
      echo $sr;
    }
      else{
        echo "";
      }?>"class="sBar"  placeholder="Search house by Area or Cost">
<button type="submit" name="sButton"class="sBtn">Search
</button>
</div></form>
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
        <div class="row" style="
           width: 100%;
        background-color: #272534;
        overflow-x: hidden;
        border-radius: 16px;
        margin-bottom: 0.4%;
        ">
            <div class="slide" style="    width: 45%;
        display: flex;
        overflow-y: hidden;
        float: left;
        height: 47vh;
        padding: 0%;">
               <?php
                    $iQuery="select * from images where ID='$rows[ID]'";
                    $iRes=mysqli_query($link,$iQuery);
                    while($iRows=mysqli_fetch_assoc($iRes))
                    {
                        echo  "<img src='{$iRows['Dir']}' width='100%'>";
                    }
                    ?>
                      </div>
        <div style=" position: relative;
    text-align: center;
    font-size: 196%;
    color: white;
    padding: 1%;
    ">
            <?php echo "Area: $rows[Area]<br>";
             echo "Rent: $rows[Cost]<br>";
           echo  "Floor: $rows[Floor]<br>";
             echo "BedRoom: $rows[BedRoom]<br>"; 
           echo  "BathRoom: $rows[BathRoom]<br>"; 
           echo  "Corridore: $rows[Corridore]<br>"; 
            echo   "Gas: $rows[Gas]<br>";
            echo "Contact: $rows[Contact]<br>";?>
           <a href="mailt.php?id=<?php echo $rows["ID"];?>&cid=<?php echo $rows["Contact"];?>"><button type="button" class="btnD">Book This House</buttn></a>
        </div>
        </div>
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
    <div class="row" style="
       width: 100%;
    background-color: #272534;
    overflow-x: hidden;
    border-radius: 16px;
    margin-bottom: 0.4%;
    ">
        <div class="slide" style="    width: 45%;
    display: flex;
    overflow-y: hidden;
    float: left;
    height: 47vh;
    padding: 0%;">
           <?php
                $iQuery="select * from images where ID='$rows[ID]'";
                $iRes=mysqli_query($link,$iQuery);
                while($iRows=mysqli_fetch_assoc($iRes))
                {
                    echo  "<img src='{$iRows['Dir']}' width='100%'>";
                }
                ?>
                  </div>
    <div style="position: relative;
    text-align: center;
    font-size: 195%;
    color: white;
    padding: 1%;
">
        <?php echo "Area: $rows[Area]<br>";
         echo "Rent: $rows[Cost]<br>";
       echo  "Floor:$rows[Floor]<br>";
         echo "BedRoom: $rows[BedRoom]<br>"; 
       echo  "BathRoom: $rows[BathRoom]<br>"; 
       echo  "Corridore: $rows[Corridore]<br>"; 
        echo   "Gas: $rows[Gas]<br>";
        echo "Contact: $rows[Contact]<br>";?>
       <a href="mailt.php?id=<?php echo $rows["ID"];?>&cid=<?php echo $rows["Contact"];?>"><button type="button" class="btnD">Book This House</buttn></a>
    </div>
    </div>
    <?php
       }
    }
        ?>
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