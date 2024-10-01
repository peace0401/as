<?php 
ob_start();
session_start();
include 'connection1.php';
include 'header.php';
include 'css/style.css';
include('checklogin.php');
check_login();
if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from dis where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data deleted !!";
		  }
		  if(isset($_GET['appr']))
		  {
		          mysqli_query($conn,"update dis set status='Approved' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Approved !!";
	
	  }
	    if(isset($_GET['rej']))
		  {
		          mysqli_query($conn,"update dis set status='Rejected' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Rejected !!";
		  }
?>
<html>
<head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>


</style>
</head>
    <title>Admin|Approve</title>
    
    <body>
	<a href="approval1.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

	  <font color="#0000FF"><b><h4><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
								?>
								</span></h4></b></font> 
	   <div class="div-center"><font color="#0000FF"><b><h1>Approve Distributor</h1></b></font></div>
        <div class="div-center">
          <div class="div-center">
		
		
			<div class="row">
								<div class="col-md-12">
								
							
									<table class="table table-hover" id="list">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>User Name</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Email</th>
												<th>Status</th>
												<th>Approve</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($conn,"select * from dis");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
										<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['name'];?></td>
												<td><?php echo $row['address'];?></td>
												<td><?php echo $row['phone'];?></td>
												<td><?php echo $row['email'];?></td>&nbsp;&nbsp;&nbsp;&nbsp;
												<td><?php if($row['status'] == "Approved"){echo '<p style="color:green">Approved</p>';}else{echo '<p style="color:red">Rejected</p>';}?></td>

													
												<td>&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="admin_approve_distributor.php?id=<?php echo $row['id']?>&appr=approve" onClick="return confirm('Are you sure you want to Approve?')"><p style="color:green">Approve</p></a>&nbsp;&nbsp;&nbsp;
												<a href="admin_approve_distributor.php?id=<?php echo $row['id']?>&rej=rejected" onClick="return confirm('Are you sure you want to Reject?')"><p style="color:red">Reject</p></a>
												<td >
												<div class="center">
										
	<a href="admin_approve_distributor.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><p style="color:red">Delete</P></i></a>
												</div>
												</td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
		
		
		
		
		
		
		</div>
        </div>
    </body>

</html>