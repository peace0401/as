<?php
    
 	// Connection Config 
	 include 'staff_header.php';
	
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
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>  


<body>
<h1>
  <a href="myproductD.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>
</h1>

<div class="container" style="width: 500px">
	<form method="POST" class="justify-content-center " enctype="multipart/form-data">
		<h3 class="mt-4" tyle = "color: blue";>Upload Product Image</h3><br><br>
		<input type="file" name="image" accept="image/*" required id="image">
		<br><br>
		<input type="submit" name="insert" id="insert" class="btn btn-primary" value="ADD" onclick="selected_image();">
	</form>

	<br><br>

	<table class="table table-bordered" width="60px">
		<tr>
			<th>Uploaded Image</th>
		</tr>
		<?php
		
			$sql="SELECT * from addpdis where id = '$id' ";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
				echo '<tr>
				<td>
				<img src="data:image/jpeg;base64,'.base64_encode($row['filename']).'" style="width: 280px ;">
				</td>
					</tr>';		
			}
		?>
	</table>
	
	<a href="myproductD.php" class="btn btn-info" role="button">DONE</a>


</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
	function selected_image(){
		var image_name = $('#image').val();
		if(image_name == ''){
			alert("please select Image");
			return false;
		}else{
			var extension = $('#image').val();
			var p = extension.lastIndexOf(".");
			extension = extension.slice(p+1,extension.length).toLowerCase();
			var ext = ["gif","png","jpeg","jpg"];
			if(!ext.includes(extension)){
				alert('unapropriate file selection Please select image file.');
				$('#image').val('');
				return false;
			}
		}
	}
</script>
</body>
</html>