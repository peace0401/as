<?php 
ob_start();
include 'css/style.css';
include 'connection1.php';
include 'main_header.php';

?>
<html>
    <title>stockiest</title>
    <head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script></script>
    </head>
    <body>
	<br>
    <a href="new_reg.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    <div class="form-center">
        <form name="registration" method="post">
        <table>
        <tr>
            <td id="center"><h1>Stockiest Registration</h1></td>
        </tr>
        <tr>
            <td><input name="uname" type="text" placeholder="Full Name" required></td>
        </tr>
        <tr>
            <td><input name="email" type="text" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
        </tr>
        <tr>
            <td><input name="ph" type="text" placeholder="Phone Number" maxlength="10" required></td>
        </tr>
        <tr>
            <td><input name="address" type="text" placeholder="Address" required></td>
        </tr>
        <tr>
            <td><input name="dob" type="date" placeholder="Date of Birth" required></td>
        </tr>
           
        <tr>
            <td><input name="pwd1" type="password" placeholder="Password" pattern=".{8,}" required>
            <p style="font-size:12px; color:red; text-align:left;">Hint:Password must contain atleast 8 characters</p></td>
            
        </tr>
        <tr>
            <td><input name="pwd2" type="password" placeholder="Re-type Password" pattern=".{8,}" required></td>
        </tr>

        <tr id="center">
            <td><input name="submit" type="submit" value="Register"></td>
        </tr>
        
        </table>
            <?php
if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['ph'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
   
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
   
	$status="Not Approved";
    if($pwd1 == $pwd2){
        $sql2 = "select email from stockiest where email = '$email'";
    $res2 = $conn->query($sql2);
    
    if($res2->num_rows > 0){
        echo 'Email Id already exists';
        
        }else{
        
      
            $sql = "insert into stockiest(name,email,phone,address,dob,pwd,status)VALUES('$uname','$email','$phone','$address','$dob','$pwd1','$status')";
    
        $res = $conn->query($sql);

			if($res) {
				$_SESSION['errmsg']="Registration Successfull";
                header("Location: login.php");
			}else{
				echo "Failed";
			}
        }

			
        }
        else{
        echo '<p style="color:red;">Password mismatch</p>';
    }
    }
    
    
?>
        </form>
        </div>
    
    </body>
</html>

