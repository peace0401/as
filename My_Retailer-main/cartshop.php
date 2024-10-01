<?php
    session_start();
 	// Connection Config 
	 include 'staff_header.php';
	
   $name1=$_SESSION['rname'];
  
	 
   $id=$_GET["id"];
	 $conn = mysqli_connect("localhost", "root", "", "stocks"); 
     
     
	
	if(!$conn){
		header("location: https://httpstat.us/404");
	}
	
	if(isset($_POST['insert'])){
		if($_FILES['image']['tmp_name']!=null){
			$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$sql= "update addpdis set filename ='$file' where id = '$id' ";
			mysqli_query($conn,$sql);
				
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shop-Online</title>
	<style> 
body {
  padding: 2rem 0rem;
}

.like {
  font-size: 1.5rem;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="./scss/style.css">
	<!--- sass styling --->
	<link rel="stylesheet" type="text/css" href="./scss/homepageStyles.css">
</head>
<body>
	


<div id="cartmain" class="container-fluid">
	<div class="container" id="cart">
		<div class="row">
			<div class="col-md-12" id="cart-heading" align="center">
			<b>	Shopping Cart</b>
			</div>
		</div>
		<hr>
		<?php
		
			$sql="SELECT * from addpdis where id = '$id' ";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
			
			?>
	<center>
	<div class="col-md-8">
      <div class="card">
      <?php echo '
				<img class="card-img" src="data:image/jpeg;base64,'.base64_encode($row['filename']).'" >'
        ?> 
        <div class="card-img-overlay d-flex justify-content-end">
          <a href="#" class="card-link text-danger like">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title"><?php echo strtoupper($row['name']);  ?></h4>
          <h6 class="card-subtitle mb-2 text-muted"> &#8377;<?php echo ($row['price']);  ?></h6>
          <p class="card-text">

          <table> 
            <tr><td><h6 class="card-subtitle mb-2 text-muted">DESCRIPTION :</h6></td><td><h6 class="card-subtitle mb-2 text-muted"> <?php echo ($row['description']);  ?></h6></td>
      
          </tr><br>

      <tr>
      <td><h6 class="card-subtitle mb-2 text-muted">SPECIFICATION :</h6></td><td><h6 class="card-subtitle mb-2 text-muted"> <?php echo ($row['specification']);  ?></h6></td>
      </tr><br>
      <tr>
      <td><h6 class="card-subtitle mb-2 text-muted">SHIPPING DAYS :</h6></td><td><h6 class="card-subtitle mb-2 text-muted"><?php echo ($row['shippingdays']);  ?>DAYS</h6></td>
      </tr><br>
      <TR>
      <td><h6 class="card-subtitle mb-2 text-muted">SHIPPING CHARGE :</h6></td><td><h6 class="card-subtitle mb-2 text-muted"> &#8377;<?php echo ($row['charges']);  ?></h6></td>
      </TR>
      </table>
             </p>
          
          
          </div>
          <div class="buy d-flex justify-content-between align-items-center">
            
        </div>
      </div>
    </div>
      
	


        <br>
    <form method="post"> 
<label >  QUANTITY</label>
<input type="number" name ="num" value="1">&nbsp;<button type="submit" name="q" class="btn btn-success btn-xs"><i class="fa fa-check" ></i></button>
<br><br><b>
      </form>
<?php
$m=0;
if(isset($_POST['q'])){

$m = $_POST['num'];



$go = $row['price']* $m;
$rtc = 1* $m;
$ro =$go+$row['charges'];

 echo "QUANTITY: ",$rtc;
$_SESSION["favq"] = $rtc;

}
?><form method="post">
  <input type="hidden" name="root" value="<?php echo $ro;
  ?>">
<label >  GRANDTOATL: &#8377;<?php if($m!=0){ echo $ro;  

}?></label></b>
<br><br><form method="post">


<button class="btn btn-success mt-3" type="submit" name="top"><i class="fa fa-shopping-cart"></i>BUY NOW</button>
<button class="btn btn-danger mt-3" type="button"   onclick="window.location.href = 'userhome.php';"><i class="fa fa-close"></i>CANCEL</button>

</form>
<?php
if(isset($_POST['top'])){
  $gk= $_POST['root'];
  
  $_SESSION['payy']=$gk;
  $r4=$row['name'];
  $_SESSION['pnamefordis']= $row['name'];
  

  $sql = "select * from retail";
    $result11 = $conn->query($sql);
  
  if($result11->num_rows > 0){
    while($row=$result11->fetch_assoc()){
      
    $r1 = $row['address'];
    $r2 = $row['phone'];
    $rto = $_SESSION["favq"];
    
    
          
    }}
    $sql1 ="insert into orders(name,phone,address,productname,quantity,total)values('$name1','$r2','$r1','$r4','$rto','$gk')";
   $resu = mysqli_query($conn,$sql1);
    if($resu){ 
      echo '<script type="text/javascript">';
      echo ' window.location = "pays.php";';  //not showing an alert box.
      echo '</script>';
    }

   
  }

?>
    </div>
    </div>
    <?php
			}

?>
</center>

</body>
</html>
