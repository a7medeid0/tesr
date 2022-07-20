<?php
$conn = mysqli_connect('localhost','bolekkeg_admin','Zeyadpc123!','bolekkeg_accs') or die("Error Connect , Contact Ziad");

$qdell = mysqli_query($conn,"DELETE FROM vics WHERE u_id = 1 ");

header("Location :ahvic.php");

?>
