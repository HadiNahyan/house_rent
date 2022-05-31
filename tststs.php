<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<?php
       $query="select * from house";
       $res=mysqli_query($link,$query);
      while($rows=mysqli_fetch_assoc($res))
       {
           ?>
    <div class="row" style="width:100%;">
        <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:50%;height:35vh;">
            <?php
                $iQuery="select * from images where ID='$rows[ID]'";
                $iRes=mysqli_query($link,$iQuery);
                while($iRows=mysqli_fetch_assoc($iRes))
                {
                    echo "<img src='{$iRows['Dir']}' width='100%'> ";
                }
                ?>
                  </div>
    <div style="width: 100%;
    position: relative;
    text-align: center;
    padding-left: 42%;
    font-size: 193%;
}">
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