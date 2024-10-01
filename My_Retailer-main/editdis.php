<?php
ob_start();
include 'css/style.css';
include 'connection1.php';
include 'staff_header.php';
session_start();


$goos=  $_SESSION['$goo'];

    $sql = "select * from  dis where name = '$goos' ";
    $result = $conn->query($sql);

?>
<html>
<title>edit</title>
    
    <body>
 <?php include 'back_btn.php'; ?>
 <h3 align="center">Edit Distributor</h3>
    <div>
	<form action="" method="post">
        <center>
        <table  >  <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
    <tr>
        <td>Name</td><td><input type="text" value="<?php echo $row['name']; ?>" name="id" required readonly="true"></td>
		</tr>
		<tr>
        <td>Email</td><td><input type="text" value="<?php echo $row['email']; ?>"required name="name">
		</tr>
		<tr>
        <td>Phone</td><td><input type="text" value="<?php echo $row['phone']; ?>" required name="place">
		</tr>
		<tr>
        <td>Address</td><td><input type="text" value="<?php echo $row['address']; ?>" name="dname">
		</tr>
        
		<CENTER>
		<tr>
		<td colspan="2">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Update"></td>
		</tr></CENTER>
       
    <?php            
        }
    }
        if(isset($_POST['submit'])){
            
			  $name= $_POST['name'];
			    $place = $_POST['place'];
				  $dname = $_POST['dname'];
                  

				    
            $sql2 = "update dis set email ='$name',phone ='$place',address='$dname' where name = '$goos' ";
            $result = $conn->query($sql2);
            if($result){
				 echo 'Data Updated';
                 unset($_SESSION["goo"]);

				header("Location:profiledis.php");
               
            }
        }
            
        ?>
    </table>    
       </form>
        </div>
    
        
        
        
    </center>       
    </body>


</html>