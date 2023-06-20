<?php include('models/database.php');
include('models/count.php')
?>

<?php include('views/header.php'); ?>

<?php include('views/sidebar.php'); ?>

<?php


$action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'list_assignments';
    }
}

switch ($action) {
    case "reservation":

        include('views/reservation.php');
        break;
    case "rooms":

        include('views/rooms.php');
        break;
    case "staff":

        include('views/staff.php');
        break;
    case "complaints":

        include('views/complaints.php');
        break;

    default:

        $booked = count_total_booked_rooms();
        $rooms = count_total_rooms();
        $available = count_available_rooms();
        include('views/dashboard.php');
}
?>



<?php include('views/footer.php'); ?>

