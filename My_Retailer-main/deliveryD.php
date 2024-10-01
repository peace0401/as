<?php
session_start();
include 'connection1.php';
include 'staff_header.php';
include 'css/style.css';


?>
<html>
<title>deliver</title><head>	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <head>

    <body>
    <a href="distributorhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>
    <div class="div-center"><font color="#0000FF"><b><h1>Delivery Details</h1></b></font></div>
    <div class="col-md-12">

        <table id="list" style="margin-top:50px;">
        <tr><th>Order NO</th>
            <th>Product Name</th>
            <th>Amount</th>
            <th>Retailer</th>
            <th>Shipped Date</th>
            <th>Recived Date</th>
        </tr>
        <tr>
            <?php
            $user = $_SESSION['login'];
            $sql= "select * from orders where ship='shipped' and orderdis='$user'";
            $result = $conn->query($sql);
            if($result){
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
            ?>
                        <td><?php echo $row['id'];  ?></td>

            <td><?php echo $row['productname'];  ?></td>
            <td><?php echo $row['total'];  ?></td>
            <td><?php echo $row['name'];  ?></td>
            <td><?php echo $row['shipdate']; ?></td>
            <td><?php echo $row['handdate']; ?></td>

                    </tr>
    <?php
                    }
                }
            }
			if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $sql2 = "delete from consultation where id= '$id' ";
            $result = $conn->query($sql2);
            if($result){
				header("Location:admin_view_healthcentre.php");
                echo 'Data Deleted';
            }
        }
            ?>
        </table>
    </div></div>
        
    </body>

</html>