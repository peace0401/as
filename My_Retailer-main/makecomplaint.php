<?php
ob_start();
include 'css/style.css';
session_start();

include 'connection1.php';
include 'userheader.php';
    $n666 = $_SESSION['login'];
    $sql = "select * from complaint where rname = '$n666' ";
    $result = $conn->query($sql);

?>
<html>


<head> 
<title>products </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    
    <body>
    <a href="userhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    

         <center>
		
		
			
								<div class="col-md-12">

        <form name="registration" method="post">
        <table>
        <tr>
            <td id="center"><h4>Complaint registration</h4></td>
        </tr>
        <tr>
            <td><input name="order" type="text" placeholder="Order No" required></td>
        </tr>
        
        <tr>
            <td><input name="ctext" type="text" placeholder=" complaint" maxlength="1000" required></td>
        </tr>
        
       

        <tr id="center">
            <td><input name="submit" type="submit" value="Register" onclick="myFunction()"></td>
        </tr>
        
        </table></form></center>
        <?php
if(isset($_POST['submit'])){

    $on = $_POST['order'];
    $rto = $_POST['ctext'];
    $sql11 = "select orderdis from orders where id ='$on'";
    $result11 = $conn->query($sql11);
    if($result11->num_rows > 0){
        while($row=$result11->fetch_assoc()){
    $_SESSION['randomfun']= $row['orderdis'];}}
    $door = $_SESSION['randomfun'];
    $timec = date("h:i:sa");
    $datec = date("d/m/Y");
    $names=$_SESSION['login'];
    $sql2= "insert into complaint(complaint,dname,rname,cdate,ctime,cstatus)values('$rto','$door','$names','$datec','$timec','$on')";
    $result12 = $conn->query($sql2);
    if($result12){
        
        header("location:makecomplaint.php");
        
    }
}
		?>		<div class="div-center">				
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        <th>OrderNo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>complaint&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Date and time&nbsp;&nbsp;&nbsp; </th>
		<th>Response&nbsp;&nbsp;&nbsp;  </th>
        
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
            <td><?php echo $row['cstatus']; ?></td>
            <td><?php echo $row['complaint']; ?></td>
            <td><?php echo $row['cdate']; ?><br><?php echo $row['ctime']; ?></td>
            <td><?php echo $row['creply']; ?></td>
        
        
        </tr>						
						
												</div>
		
    <?php            
        }
    }
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $sql2 = "delete from tbl_containment where id= '$id' ";
            $result = $conn->query($sql2);
            if($result){
				header("Location:staff_view_containment.php");
                echo 'Data Deleted';
            }
        }
            
        ?>
    </table>    </div>
        
        </div>
    
        
        
        
        
    </body>
    <script>
function myFunction() {
  confirm("Registered Successfully");
}
</script>

</html>