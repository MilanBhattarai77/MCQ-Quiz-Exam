<?php
session_start();
include "../connection.php";
 if (!isset($_SESSION["admin"])) {
            
        
            ?>
            <script type="text/javascript">
                window.location="adminlogin.php";
            </script>
            <?php
            }
            ?>
            <?php
$id=$_GET["id"];
mysqli_query($link,"delete from exam_category where id=$id ");
?>

<script type="text/javascript">
	window.location="exam_category.php";
</script>