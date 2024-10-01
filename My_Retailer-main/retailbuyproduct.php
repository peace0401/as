<?php
ob_start();
include 'css/style.css';


include 'connection1.php';
include 'userheader.php';

    $sql = "select * from addpdis";
    $result = $conn->query($sql);

?>
<html>


<head> 
<title>products  RETAILER</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
.btn {
  background-color: YELLOW;
  border: none;
  color: BLACK;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: GREEN;
}
.btn-square-md {
width: 50px !important;
max-width: 100% !important;
max-height: 100% !important;
height: 50px !important;
text-align: center;
padding: 0px;
font-size:19px;

}.material-icons.md-48 { font-size: 48px; }
</style>
</head>
    
    <body>
    <a href="userhome.php"><h3> <font color="#0000FF" > <i class="material-icons md-48" >arrow_circle_left</i></font></h3></a>
 <div class="div-center">
          <div class="div-center">
		
		
			<div class="row">
								<div class="col-md-12">
								
							
									<table  >
        
        
    <tr>
        
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>&nbsp;&nbsp;&nbsp;  </th>
        <th>&nbsp;&nbsp;&nbsp;  </th>

        
        <th>&nbsp;&nbsp;&nbsp; </th>
		<th>&nbsp;&nbsp;&nbsp; </th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
           <td  height="400"  width="400"><?php echo '
				<img src="data:image/jpeg;base64,'.base64_encode($row['filename']).'" style="width: 280px ;">
				';	?></td>

            <td WIDTH="300"><b><?php echo strtoupper($row['name']);  ?><br><br>
            RS:<?php echo $row['price']; ?><br><br>
            Description:<br></b><i><?php echo $row['description']; ?></i><BR> <br><B>
            <?php if($row['stock']==0 )
            {
              echo '<p style="color:red;">NOSTOCK</p>';
            }else{
                echo '<p style="color:GREEN;">INSTOCK</p>';
            }
        ?></b>
        </td>
            
            
              <td >
              <div class="btn-">

              
<a href="cartshop.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to order this product')">
					
<button class="btn btn-sm  btn-CIRCLE-md" ><i class="fa fa-shopping-cart"></i>ORDER </BUTTON>		
    </a>
     
    
    


							
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
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>