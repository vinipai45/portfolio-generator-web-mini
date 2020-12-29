<?php include 'utils/constants.php'; ?>
<?php
// connect to the database
$conn = mysqli_connect('localhost',  $db_user, $db_passowrd, $db);

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
} else {
    //get last id from users table 
    $last_id_query = "SELECT max(id) FROM users";
    $last_id_result = mysqli_query($conn, $last_id_query);
    $last_id = mysqli_fetch_all($last_id_result, MYSQLI_ASSOC)[0]['max(id)'];
}
