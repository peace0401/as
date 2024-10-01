<?php 
include 'connection1.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
    $offer= $_POST['offer'];
    $stock = $_POST['stock'];
    $specification = $_POST['specification'];
    $shippingdays = $_POST['shippingdays'];
	$charges = $_POST['charges'];
    $co = $_POST['he'];
    $sql22 = "select stock from addpdis where id = '$co'";
    $resol = $conn->query($sql22);
    if($resol->num_rows > 0){
        while($row=$resol->fetch_assoc()){
            $rrr= $row['stock'];
            $newstock = $stock + $rrr;
        }}



    $sql ="update addpdis set name = '$name' , price = '$price' ,description = '$description' , offer = '$offer' ,stock ='$newstock' , specification = '$specification', shippingdays ='$shippingdays' ,charges= '$charges' where id  = '$co'";
	

    $res = $conn->query($sql);

    if($res) { 
        
        echo "Product Added Successfully";
        header("Location:myproductD.php");
    }else{
        echo "Failed to Add Data";
    }

}
?>
 