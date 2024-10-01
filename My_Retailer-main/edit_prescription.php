<?php
ob_start();
include 'connection.php';
include 'doctorheader.php';
include 'css/style.css';

session_start();
$docname = $_SESSION['login'];
$pid = $_SESSION['pid'];
$sl = $_SESSION['sl'];
$sql = "select name,phone from registration where email = '$pid'";
$result = $conn->query($sql);
if($row = $result->fetch_assoc()){
    

?>

<html>
<title>Prescribe</title>
    <body>
	<?php include 'back_btn.php'; ?>
        <table id="list" style="margin-top:50px;">
        <tr>
		<th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Problems</th>
            <th>Medicines</th>
        </tr>
        <tr>
		 <td><?php echo $sl;  ?></td>
            <td><?php echo $row['name'];  ?></td>
            <td><?php echo $row['phone'];  ?></td>
            <?php
			//echo $sl;
			//echo $docname;
			//echo $pid;
            $sql2= "select * from consultation where id='$sl' && doctor_name='$docname' && user_email='$pid'";
            $result2 = $conn->query($sql2);
            if($row2 = $result2->fetch_assoc()){
            ?>
            <td><?php echo $row2['problems'];  ?></td>
            <td><?php echo $row2['medicine']; ?></td>
        </tr>
        </table>
        <div class="div-center">
            <form id="p" name="p" method="post">
        <table style="margin-top:50px;">
        <tr>
            <td><textarea name="p"><?php echo $row2['prescription']; ?></textarea></td>
        </tr>
        <tr>
            <td id="center"><input type="submit" name="submit" value="Update"></td>
        </tr>
            <tr>
            <td id="center">
                   <?php
                if(isset($_POST['submit'])){
                    $p = $_POST['p'];
                    $sql3 = "update consultation set prescription = '$p',status ='done' where id='$sl'";
                    $result3 = $conn->query($sql3);
                    if($result3){
                        echo 'completed<br>';
                        echo "<a id='a' href = 'view_prescription.php'>Back to List</a>";
                    }
                }
			}
}
                ?>
                </td>
        </tr>
        </table>
             
        </form>
        </div>
    </body>

</html>