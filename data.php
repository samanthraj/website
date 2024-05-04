<?php 

 if(isset($_POST["button"])){
$customer_id = $_POST["customer_id"];
$from_date = $_POST["fromdate"];
$to_date = $_POST["todate"];
$room_type = $_POST["roomtype"];
$no_of_rooms = filter_input(INPUT_POST, 'no_of_rooms', FILTER_SANITIZE_NUMBER_INT);


$servername = "localhost";
$username = "root";
$password = "";
$database = "hsr";
$conn ="";
$cost =0;

try{
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $database);

//Check connection

}
catch(exception){
    echo"better luck next time";

}

 /* this if else blocks will check the room type and give per day cost of the perticular type room  */ 
if($room_type="Premium"){
$cost = 7000;
}
else if($room_type ="Signature"){
$cost = 5000;
}
else{
  $cost = 4000;
}
/* using DateTime class so that i can get diff in numb to calculate total prize */
$fromdate = new DateTime($from_date);
$todate = new DateTime($to_date);
$intervel = $todate->diff($fromdate);
$n = $intervel-> days;


$total_price = $no_of_rooms * $cost * $n ;
$q ="select customer_id from customer where customer_id ='$customer_id'";
$r = mysqli_query($conn,$q);
if($r){

$query = "SELECT room_id FROM Room
WHERE room_type_id = (SELECT room_type_id FROM Room_Type WHERE name = '$room_type')
AND availability = 1
AND room_id NOT IN (
    SELECT room_id FROM Reservation
    WHERE ('$from_date' BETWEEN check_in_date AND check_out_date)
    OR ('$to_date' BETWEEN check_in_date AND check_out_date)
)
LIMIT $no_of_rooms";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == $no_of_rooms) {
    // Rooms available, start transaction
    mysqli_begin_transaction($conn);

    try {
        // Insert reservation records for each booked room and update availability
        while ($row = mysqli_fetch_assoc($result)) {
            $room_id = $row["room_id"];
            // You need to implement this function
            // Insert reservation record
          
            $insert_query = "INSERT INTO Reservation (customer_id, check_in_date, check_out_date, total_price,  room_id)
                             VALUES ('$customer_id', '$from_date', '$to_date', '$total_price', '$room_id')";
            mysqli_query($conn, $insert_query);

            // Update room availability
            $update_query = "UPDATE Room SET availability = 0 WHERE room_id = '$room_id'";
            mysqli_query($conn, $update_query);
echo"reservation successful";
     header("Location:index.php");
           $boolean =TRUE;
        }

        // Commit transaction
        mysqli_commit($conn);
        
        echo "Reservation successful!";
    } catch (Exception $e) {
        // Rollback transaction if an error occurs
        mysqli_rollback($conn);
        
        echo "Error: " . $e->getMessage();
    }
}


else {
    echo "Sorry, rooms are not available for the selected dates.";
}

}
else{
    echo"your customer_id is invalid <br>";
    echo "click on join now to get your customer_id";
}
 }

?>







    


  

