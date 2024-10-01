<?php
ob_start();
include 'css/style.css';
session_start();

include 'connection1.php';
include 'staff_header.php';

    $sql = "select * from complaint";
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
    <a href="retailhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    
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
    
    <label for="comment">Reply:</label>
    <textarea class="form-control" rows="8" id="comment" name="rothanam"></textarea>
  

        </div>
        <div class="modal-footer">
          <button type="submit" name="rocklee" class="btn btn-default" data-dismiss="modal">Send</button>
</form>
          <?php
if(isset($_POST['rocklee'])){
    
    $ons = $_POST['rothanam'];
    $sql1= "update complaint set  creply= '$ons' where id = '$_GET['id']' ";
	$res =	mysqli_query($conn,$sql1);
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