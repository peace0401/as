<?php
ob_start();
session_start();
include 'connection1.php';
include 'main_header.php';
include 'css/style.css';

?>
<html>
<title>Login</title> <script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };

</script>

<body>

    <div class="form-center">
    <form method="post">
    
    <table>
	<center>
								<br />
								<span style="color:red;">
								</span>
							</p></center>
    <tr>
       <td id="center"> <h1>Login</h1></td>
    </tr>
        <tr>
            <td><input type="text" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
        </tr>
        <tr>
            <td><input type="password" name="pwd" placeholder="Password" pattern=".{8,}" required></td>
        </tr>
        <tr>
            <td><select name="role" required>
			<option selected="Select">Select Type</option>
                <option value="stock">Stockiest</option>
                
				<option value="dis">Distributor</option>
                <option value="retail">Retailer</option>
                <option value="admin">Admin</option>
                </select></td>
        </tr> 
    <tr><td id="center"><input type="submit" name="submit" value="Login"></td></tr>
    </table>
        
    </form>
	
    </div>
   
<?php
        if(isset($_POST['submit'])){
          $email = $_POST['email'];  
          $pwd = $_POST['pwd'];  
          $role = $_POST['role'];  
		
		  if($role=="stock")
		  {
			  $sql = "select name,email,pwd,status from stockiest where email ='$email' && pwd ='$pwd'  && status ='Approved'";
				 $ret=mysqli_query($conn,$sql);
				$num= mysqli_fetch_array($ret);

				$_SESSION['login']=$num['name'];
		  }
		  
		  else if($role=="retail")
		  {
			  $sql = "select name,email,pwd,status from retail where  email ='$email' && pwd ='$pwd' && status ='Approved' ";
				 $ret=mysqli_query($conn,$sql);
				$num=mysqli_fetch_array($ret);				
				$_SESSION['login']=$num['name'];
		  }
		   else if($role=="dis")
		  {
			 
			  $sql = "select email,pwd,name,status from dis where  email ='$email' && pwd ='$pwd' && status ='Approved'";
			//   $sql1 = "select name from registration where role ='$role' && email ='$email' && pwd ='$pwd'";
				 $ret=mysqli_query($conn,$sql);
				$num=mysqli_fetch_array($ret);				
				$_SESSION['login']=$num['name'];
				 echo $num['name'];
		  }
		  else if($role=="admin")
		  {
			  $sql = "select email,pwd from admin where  email ='$email' && pwd ='$pwd'";
			  		 $ret=mysqli_query($conn,$sql);	
				$_SESSION['login']="Admin";
		  }
		  else{
		  }
          //  $sql = "select role,email,pwd from registration where role ='$role' && email ='$email' && pwd ='$pwd'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
            //    session_start();
                $_SESSION['uid'] = $email;
				
				
                if($role == 'stock'){
                    header("Location: stockhome.php");
                }elseif($role == 'dis'){
                    header("Location: distributorhome.php");
                }elseif($role == 'retail'||$role == 'user'){
                    header("Location: userhome.php");
                }elseif($role == 'admin'){
                    header("Location: approval1.php");
                }
            }else{
                echo '<center><br><b><h3>invalid credentials or Admin does not approve you!
                <i></i></h3></b></center>';
            }
        }
    ?>
    </body>



</html>