<?php
include "dbconn.php";
?>
<h1>Ticket #<?php echo $_GET['num']?></h1>
<h4><i><?php echo $_SESSION["cat"].": </i>".$_SESSION["titel"]?></h4>