<?php 
include 'connection1.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
    $stock = $_POST['stock'];
    $specification = $_POST['specification'];
    ;
    $co = $_POST['he'];
    
    $sql ="update addpdis set name = '$name' , price = '$price' ,description = '$description' ,stock ='$stock' , specification = '$specification' where id  = '$co'";
	

    $res = $conn->query($sql);

    if($res) { 
        
        echo "Product Added Successfully";
        header("Location:myproductS.php");
    }else{
        echo "Failed to Add Data";
    }

}
?>
 