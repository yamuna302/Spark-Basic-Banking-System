<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/btable.css">
    <link rel="stylesheet" type="text/css" href="css/navig.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>

<body>
<style>

body{

  
  justify-content: center;
  align-items: center;
  
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
} 
form{
padding-top: 15px;
padding-bottom: 10px;

line-height: 20px;
padding-left:30px;
}
input[type=text], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=email], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=number], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  

.container{
	max-width: 500px;
  width: 80%;
  background-color: #fff;
  padding: 50px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
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
<?php
    include 'bconn.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
	echo"<br>";
    $email=$_POST['email'];
	echo"<br>";
    $balance=$_POST['balance'];

    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='moneytransfer.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navigbar.php';
?>

        <h2 class="text-center pt-4" style="color:white">Create User Account</h2>
        <hr><br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="user3.jpg" style="border: none; border-radius: 40% align-items:center;size:30px">
        </div>
       
	   <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
			<label >Name:</label>
            <input class="app-form-control" type="text"  name="name" placeholder= "Name" size="15" required >
             
            </div>
            <div class="app-form-group">
			    <label >E-mail:</label>
              <input class="app-form-control"   placeholder="Email" type="email" name="email" required>
            </div>
            <div class="app-form-group">
			<label >Balance:</label>
              <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
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

