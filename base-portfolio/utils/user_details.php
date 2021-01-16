<?php
include('services/db_service.php');
// write query for all user data
$user_detalis_query = 'SELECT * FROM users WHERE id =' . $user_id;
$professions_query = 'SELECT * FROM professions WHERE id =' . $user_id;
$projects_query = 'SELECT * FROM projects WHERE id =' . $user_id;
$services_query = 'SELECT * FROM services WHERE id =' . $user_id;
$skills_query = 'SELECT * FROM skills WHERE id =' . $user_id;
$resume_query = 'SELECT * FROM resume WHERE id =' . $user_id;




// get the result set (set of rows)
$user_details_result = mysqli_query($conn, $user_detalis_query);
$professions_result = mysqli_query($conn, $professions_query);
$projects_result = mysqli_query($conn, $projects_query);
$services_result = mysqli_query($conn, $services_query);
$skills_result = mysqli_query($conn, $skills_query);
$resume_result = mysqli_query($conn, $resume_query);


// fetch the user_details_resulting rows as an array
$user_details = mysqli_fetch_all($user_details_result, MYSQLI_ASSOC);
$professions = mysqli_fetch_all($professions_result, MYSQLI_ASSOC);
$projects = mysqli_fetch_all($projects_result, MYSQLI_ASSOC);
$services = mysqli_fetch_all($services_result, MYSQLI_ASSOC);
$skills = mysqli_fetch_all($skills_result, MYSQLI_ASSOC);
$resume = mysqli_fetch_all($resume_result, MYSQLI_ASSOC);


// free the $user_details_result from memory (good practise)
mysqli_free_result($user_details_result);
mysqli_free_result($professions_result);
mysqli_free_result($projects_result);
mysqli_free_result($services_result);
mysqli_free_result($skills_result);
mysqli_free_result($resume_result);
