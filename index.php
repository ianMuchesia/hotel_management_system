<?php include('models/database.php'); ?>

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

switch($action) {
    default:

    include('views/trial.php');
}
?>



<?php include('views/footer.php'); ?>

