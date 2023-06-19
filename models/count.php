<?php

function count_total_rooms(){
    global $db;

    $query = 'SELECT COUNT(*) FROM rooms';

    $statement= $db->prepare($query);
    $statement->execute();
    $count = $statement->fetch();
    $statement -> closeCursor();
    return $count;
}


function count_total_booked_rooms(){
    global $db;

    $query = 'SELECT COUNT(*) FROM rooms
    WHERE status = 1';
     $statement= $db->prepare($query);
     $statement->execute();
     $count = $statement->fetch();
     $statement -> closeCursor();
     return $count;
}

function count_available_rooms(){
    global $db;

    $query = 'SELECT COUNT(*) FROM rooms
    WHERE status IS NULL';
     $statement= $db->prepare($query);
     $statement->execute();
     $count = $statement->fetch();
     $statement -> closeCursor();
     return $count; 
}


function count_total_complaints(){
    global $db;
$query = 'SELECT COUNT(*) FROM complaints';
 $statement= $db->prepare($query);
 $statement->execute();
 $count = $statement->fetch();
 $statement -> closeCursor();
 return $count;
}

function count_checkedin(){
    global $db;
    $query = 'SELECT COUNT(*) FROM bookings
    WHERE checkedIn = 1';

$statement= $db->prepare($query);
$statement->execute();
$count = $statement->fetch();
$statement -> closeCursor();
return $count;


}
