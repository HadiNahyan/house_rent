<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
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
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="overflow-x:hidden">
<?php
       $query="select * from house";
       $res=mysqli_query($link,$query);
      while($rows=mysqli_fetch_assoc($res))
       {
           ?>
    <div class="row" style="
    width: 100%;
    background-color: #009688a6;
    overflow-x: hidden;
    border-radius: 26px;
    margin: 1%;">
        <div class="slide" style="width: 45%;
    display: flex;
    overflow-y: hidden;
    float: left;
    height: 47vh;
    padding:1%;">
           <?php
                $iQuery="select * from images where ID='$rows[ID]'";
                $iRes=mysqli_query($link,$iQuery);
                while($iRows=mysqli_fetch_assoc($iRes))
                {
                    echo  "<img src='{$iRows['Dir']}' width='100%'>";
                }
                ?>
                  </div>
    <div style="    position: relative;
    text-align: center;
    font-size: 189%;
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
    </div>
    </div>
    <br>
    <?php
       }
        ?>

</body>

</html>