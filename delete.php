<?php
include "conn.php";
$id=$_GET['id'];
$mob=$_GET['cid'];
mysqli_query($link,"delete from house where ID=$id");
?>
<script type="text/javascript">
    window.location="ad.php?id=<?php echo $mob?>";
    </script>