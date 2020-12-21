<?php include 'utils/constants.php'; ?>
<?php
// connect to the database
$conn = mysqli_connect('localhost',  $db_user, $db_passowrd, $db);

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
