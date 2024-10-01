<?php
session_start();


$sasuke=$_SESSION['sakura'];
echo $sasuke;
$rein = $_SESSION['obitto'];
echo $rein;
$conn = mysqli_connect("localhost", "root", "", "stocks");
$sql = "select stock from addpdis where name ='$rein' ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){

$rasagan = $row['stock'];
echo $rasagan;

$tailbeast = $rasagan-$sasuke;
$sql1 = "update addpdis set stock = '$tailbeast' where name='$rein'";
mysqli_query($conn,$sql1);
header("location: deliveryretail.php");
    }
}
?>