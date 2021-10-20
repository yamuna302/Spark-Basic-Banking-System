<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/btable.css">
    <link rel="stylesheet" type="text/css" href="css/navig.css">

    <style type="text/css">
      
       
	body{
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
	.container{
		justify-content: center;
 	max-width: 500px;
    width: 100%;
    background-color: #fff;
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.15);
	
    }
    hr {  
    border: 1px solid #f1f1f1;  
    margin-bottom: 25px;  
    }
 .fromuser{  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
} 
.app-form-button{  
  background-color: #9b59b6;
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
} 
.submitbtn:hover { 
/* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6); 
  
}
	
    </style>
</head>

<body>
<?php
    include 'bconn.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navigbar.php';
?>
<h2 class="text-center pt-4"style="color:white">View Details</h2><hr>
<div class="container">
        
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm" style="align-items: center">
                    <div class='main' style="align: center" >
              <form action="bview.php" method="GET" class = "form" style="align: center">
			  <label >Select id</label>
             
		    <select  class="fromuser" type="text"  name="id" required value=""   >
		    <option value ="" >Customer id</option>
		    <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['id'] . "'>" . $tname['id'] . "</option>";
                        }
                ?>

        </select><br><br>
		
         <input class="app-form-button" type="submit" value="View" name="submit"></input>		
	</form>
</div>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>

