<?php
include ("conn.php");
if(isset($_POST['Submit'])){
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Mobile=$_POST['Mobile'];
  $State=$_POST['State'];
  $City=$_POST['City'];
  $Address=$_POST['Address'];
//Insert data
$query = "INSERT INTO 'crudtable'
(ID, Name, Email, Mobile, State, City, Address)
VALUES
('$Name','$Email','$Mobile','$State','$City','$Address')";
mysqli_query($con,$query);
} 
?>


<html>
 <head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
 <body>
    <div class="col-lg-6 m-auto">
      <form method="post">
        <br>
        <div class="card">
          <div class="card-header bg-dark">
            <h1 class="text-white text-center"> Insert Opearation </h1>
          </div><br>
          <label>Name: </label>
          <input type="text" name="name" class="form-control"><br>
          <label>Email: </label>
          <input type="text" name="Email" class="form-control"><br>
          <label>Mobile: </label>
          <input type="text" name="Mobile" class="form-control"><br>
          <label>State: </label>
          <input type="text" name="State" class="form-control"><br>
          <label>City: </label>
          <input type="text" name="City" class="form-control"><br>
          <label>Address: </label>
          <input type="text" name="Address" class="form-control"><br>
          <button class="btn btn-success" type="submit" name="submit"> 
             Submit 
          </button><br>
        </div>
      </form>
    </div>
  </body>
</html>