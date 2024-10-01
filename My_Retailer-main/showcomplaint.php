<?php
ob_start();
include 'css/style.css';
session_start();

include 'connection1.php';
include 'staff_header.php';
$s23 = $_SESSION['login'];
$boss= "veiwed";
    $sql = "select * from complaint where cview <> '$boss' and dname='$s23' ";
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
    <a href="distributorhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">COMPLAINT RESPONSE</h4>
        </div>
        <div class="modal-body">
        <form method="post">
    
    
    <label for="comment">Comment:</label>
      <textarea class="form-control" name="rothanam" rows="5" id="comment"></textarea>  

        </div>
        <div class="modal-footer">
          <button type="submit" name="rocklee" class="btn btn-success" >Send</button>
</form>
          <?php
if(isset($_POST['rocklee'])){
    
    $ons = $_POST['rothanam'];
    $sql1= "update complaint set creply= '$ons' where id = '".$_GET['id']."' ";
	$res =	$conn->query($sql1);
        if($res){
            $horror = "veiwed";
            $sql3= "update complaint set cview = '$horror' where id = '".$_GET['id']."'";
            mysqli_query($conn,$sql3);
            
            header("Location:showcomplaint.php");
        }

        }
?>

        </div>
      </div>
      
    </div>
  </div>
         <center>
		
		
			
	<div class="div-center">				
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        <th>OrderNo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>complaint&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Date and time&nbsp;&nbsp;&nbsp; </th>
		<th>Action&nbsp;&nbsp;&nbsp;  </th>
        
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
            <td>  <a href="viewordercomplaint.php?id=<?php echo $row['cstatus']?>" onClick="return "><?php echo $row['cstatus']; ?></td>
            <td><?php echo $row['complaint']; ?></td>
            <td><?php echo $row['cdate']; ?><br><?php echo $row['ctime']; ?></td>
            
        
        <td>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">        <a href="showcomplaint.php?id=<?php echo $row['id']?>" onClick="return ">ADD</a>
</button>
    
</td>
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


</html>