<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style> 
 .btn{
    background-color: #AB954F;
    border:0px;
    margin-left: 200px;
 }
 .form{
    border:25px;
 }
 .name{
    text-align: center;
     color: #333333;
     }

</style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-5 name">Join Now</h2>
        <form action="join.php"method="post" class="border p-4">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
          </div>
          <div class="form-group ">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone-number">
          </div>
          <button type="submit" class="btn btn-primary " name="submit">Submit</button>
        </form>
        <div class="mt-3" id="customer-id"></div>
      </div>
    </div>
  </div>

  
</body>
</html>
<?php
if(isset(  $_POST["submit"]   )  )   {
 
try{
$server ="localhost";
$user ="root";
$password="";
$database = "hsr";
$conn ="";
$conn = mysqli_connect($server,$user,$password,$database);

$name=$_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone-number"]
;
$sql = "insert into customer(name,email,phonenumber) values ('$name','$email','$phone')";
$res =mysqli_query($conn,$sql);
if($res){
$sql1 = "select customer_id from customer where name='$name' And email='$email' And phonenumber='$phone'";
$res2 = mysqli_query($conn,$sql1);

$row = mysqli_fetch_assoc($res2);
echo "your customer id is {$row["customer_id"]}<br>";

echo "note it<br>";
echo"your registration is complete <br> ";

}
else{
  echo"error occured";
}
}

catch(exception){
echo"error occured";
}


}

?>