<?php 




function add_room($room_type_id, $room_no){
    global $db;

    if($room_no){
        // Check if the room number already exists
        $checkQuery = "SELECT COUNT(*) FROM room WHERE room_no = :room_no";
        $checkStatement = $db->prepare($checkQuery);
        $checkStatement->bindValue(':room_no', $room_no);
        $checkStatement->execute();
        $count = $checkStatement->fetchColumn();

        if ($count > 0) {
            // Room number already exists, handle the error as per your requirement
            // For example, you can throw an exception or display an error message
            throw new Exception('Room number already exists.');
        }

        // Room number doesn't exist, proceed with insertion
        $insertQuery = "INSERT INTO room (room_type_id, room_no) VALUES (:room_type_id, :room_no)";
        $insertStatement = $db->prepare($insertQuery);
        $insertStatement->bindValue(':room_type_id', $room_type_id);
        $insertStatement->bindValue(':room_no', $room_no);
        $insertStatement->execute();
        $insertStatement->closeCursor();
    }
}


function get_single_room($room_no){
    if(!$room_no){
        return "Error";
    }
    global $db;
    $query = 'SELECT * FROM rooms WHERE roomNo= :room_no';
    $statement = $db -> prepare($query);
    $statement->bindValue(':room_no' , $room_no);
    $statement->execute();
    $room = $statement->fetch();
    $statement -> closeCursor();
    return $room;
}


function get_rooms(){
    global $db;
    $query = 'SELECT * FROM rooms';
    $statement = $db -> prepare($query);
 
    $statement->execute();
    $rooms = $statement->fetchAll();
    $statement -> closeCursor();
    return $rooms;
}


function edit_room(){
    
}

function delete_room($room_no){
    global $db;
    $query = 'DELETE FROM rooms WHERE roomNo = :room_no';
    $statement = $db -> prepare($query);
    $statement->bindValue(':room_no' , $room_no);
    $statement->execute();

    $statement -> closeCursor();
  
}


function get_room_type($room_type_id){
    if(!$room_type_id){
        return "Error";
    }
    global $db;
    $query = 'SELECT * FROM rooms WHERE roomType= :room_type_id';
    $statement = $db -> prepare($query);
    $statement->bindValue(':roomType' , $room_type_id);
    $statement->execute();
    $room_type = $statement->fetch();
    $statement -> closeCursor();
    return $room_type;
}


function get_room_price(){

}


function booking($room_id, $room_type_id, $customer_name, $customer_contact, $customer_email , $customer_id_card, $total_price, $checkin, $checkout){

    global $db;
    $customerQuery = 'INSERT INTO customer (name, contact, email, idCard, totalPrice, roomID, roomType) VALUES (
        :name, :contact, :email , :idCard, :totalPrice, :roomID, :roomType)';
    
    // Update room status to booked in the 'rooms' table
    $roomQuery = 'UPDATE rooms SET status = 1 WHERE roomID = :roomID';
    
    // Insert booking details into the 'bookings' table
    $bookingQuery = 'INSERT INTO bookings (idCard, roomID, checkin, checkout) VALUES (:idCard, :roomID, :checkin , :checkout)';
    
    // Prepare and execute the queries
    $customerStatement = $db->prepare($customerQuery);
    $roomStatement = $db->prepare($roomQuery);
    $bookingStatement = $db->prepare($bookingQuery);
    
    $customerStatement->bindValue(':roomType', $room_type_id);
    $customerStatement->bindValue(':roomID', $room_id);
    $customerStatement->bindValue(':name', $customer_name);
    $customerStatement->bindValue(':contact', $customer_contact);
    $customerStatement->bindValue(':idCard', $customer_id_card);
    $customerStatement->bindValue(':email', $customer_email);
    $customerStatement->bindValue(':totalPrice', $total_price);
    
    $roomStatement->bindValue(':roomID', $room_id);
    
    $bookingStatement->bindValue(':idCard', $customer_id_card);
    $bookingStatement->bindValue(':roomID', $room_id);
    $bookingStatement->bindValue(':checkin', $checkin);
    $bookingStatement->bindValue(':checkout', $checkout);
    
    $customerStatement->execute();
    $roomStatement->execute();
    $bookingStatement->execute();
    
    // Close the database connection
    $customerStatement->closeCursor();
    $roomStatement->closeCursor();
    $bookingStatement->closeCursor();

}


function customer_details(){

}


function booked_room(){

}


function check_in_room(){

}


function checkout_room(){

}


function create_complaint(){

}

function resolve_conflict(){
    
}