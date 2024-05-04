


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel = "stylesheet" href = "style.css">
 <style>

 .text{
    background-color: white;
    width:500px;
    height:40px;
    border-radius: 5px;
    position: absolute;
    top:85px;
    left:380px;
    text-align: center;
color:black;

    }

 </style>
  
</head>
<body>
    <header>
   <div class="container">
    
     <div class="logo">
    
       <span id="icon"> <i class="fa-brands fa-phoenix-framework"></i> </span>
       <p id ="title">SHANGRI-LA</p>
    
     </div>
     <div class="nav">
        <div class="sign">
            <i class="fa-regular fa-user"></i><a href="" >Sign in</a>
      
    </div>
    <div class="seperate"></div>
    <div class="join">
        <a href="join.php">
            join now
</a>
    </div>
    <div class="seperate"></div>
    <div >
        <a  class="reser">Find Reservetions</a>
    </div>
    <div class="seperate"></div>
    <div class="english">
        <i class="fa-solid fa-globe"></i><a href="">English</a>
        
    </div>
    <div class="seperate"></div>
    <div class="in">
        <p>INR</p>
    </div>
    <div class="seperate"></div>
    <div class="phone">
        <i class="fa-solid fa-mobile-screen-button"></i>
    </div>
    
     </div>
  
   </div>
   

    </header>
    
<body>
    
<div class="reser_back">
  
  
</div>


<form action="reservation.php" method="post" id="formpop" >
    <label id="name">customer_id</label>
    <input type = "text" name="customer_id" value="customer_id">
    <label>From date</label>
    <input type = "date" name="fromdate" value="fromdate">
    <label >Todate</label> 
    <input type = "date" name="todate" value="todate"> 
     <label id="roomtype">
        RoomType
     </label> 
     <select name="roomtype">
        <option value="platinum">Platinum </option>
        <option value="signature">Signature </option>
        <option value="comfort">Comfort </option>
     </select>
     <label id=no_of_room> No_Of_Rooms</label>
     <input type = "TEXT" name="no_of_rooms" >
     <input type="submit" name="button"  >
</form>

<div class="text" >
    <P>Status</P>
    <?php
    if(isset($boolean)){
        echo "YOUR RESERVATION IS SUCCESFUL";

    }
    ?>
</div>

    
  
   <?php

include("data.php");


?>
<sript src ="logic.js"></sript>
</body>
</html>

