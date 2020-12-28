<!--
field validations
red text css
add all fields
  -->
<?php include 'utils/constants.php'; ?>
<?php


include 'services/db_service.php';
include 'utils/sample_data.php';
include 'utils/query_functions.php';

//use this id for the insertion queries

$current_user_id = $last_id + 1;
print_r($current_user_id);




$user_name = $password = $password_re = '';
$errors = array('user_name' => '', 'password' => '', 'password_re' => '');

if (isset($_POST['login'])) {
    header('Location: index.php');
}
//post
if (isset($_POST['submit'])) {
    // check user_name
    if (empty($_POST['user_name'])) {
        $errors['user_name'] = 'a name is required';
    } else {
        $user_name = $_POST['user_name'];
    }

    // check password
    if (empty($_POST['password'])) {
        $errors['password'] = 'A password is required';
    } else {
        $password = $_POST['password'];
        // password validation
        // if (!preg_match('/^[a-zA-Z\s]+$/', $password)) {
        //     $errors['password'] = 'password must be letters and spaces only';
        // }
    }

    if (empty($_POST['password_re'])) {
        $errors['password_re'] = 'A password is required';
    } else {
        $password_re = $_POST['password_re'];
        // password validation
        // if (!preg_match('/^[a-zA-Z\s]+$/', $password)) {
        //     $errors['password'] = 'password must be letters and spaces only';
        // }
    }


    if (array_filter($errors)) {
        //echo 'errors in form';
    } else {

        //echo 'form is valid';
        // escape sql chars
        $name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);










        //new user data insert query 
        $register_new_user_query = "INSERT INTO users(`id`, `name`, `about_1`, `about_2`, `about_3`, `main_profession`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `email`, `facts`, `clients`, `projects`, `hours`, `workers`, `skills`, `portfolio`, `services`, `profile_photo_url`, `github_url`, `linkedin_url`, `instagram_url`)
         VALUES (NULL, '$name', '$about_1', '$about_2', '$about_3', '$main_profession', '$birthday', '$website', '$phone', '$city', '$age', '$degree', '$email', '$facts', '$clients', '$projects', '$hours', '$workers', '$skills', '$portfolio', '$services', '$profile_photo_url', '$github_url', '$linkedin_url', '$instagram_url')";
        // echo ($register_new_user_query);

        //professions instertion query
        $professions_array_new = array();
        foreach ($professions_array as $x => $val) {
            array_push($professions_array_new, "'$val'");
        }
        $professions_insert_query = formulate_query("INSERT INTO `professions` (`id`, `type`) VALUES", $professions_array_new, $current_user_id);
        // print_r($professions_insert_query);


        //projects instertion query
        $projects_array_new = array();

        foreach ($porject_name_array as $x => $val) {
            array_push($projects_array_new, "'$val','$project_image_url_array[$x]','$project_link_array[$x]'");
        }
        $projects_insert_query = formulate_query("INSERT INTO `projects` (`id`, `name`, `image_url`, `link`) VALUES", $projects_array_new, $current_user_id);
        // print_r($projects_insert_query);

        //services instertion query
        $services_array_new = array();
        foreach ($services_array as $x => $val) {
            array_push($services_array_new, "'$val','$services_description_array[$x]'");
        }
        $services_insert_query = formulate_query("INSERT INTO `services` (`id`, `service`, `description`) VALUES", $services_array_new, $current_user_id);
        // print_r($services_insert_query);


        //resume instertion query
        $resume_array_new = array();
        foreach ($resume_title_array as $x => $val) {
            array_push($resume_array_new, "'$val','$resume_start_date_array[$x]','$resume_end_date_array[$x]','$resume_place_array[$x]','$resume_description_array[$x]'");
        }
        $resume_insert_query = formulate_query("INSERT INTO `resume` (`id`, `title`, `start_year`, `end_year`, `place`, `description`) VALUES", $resume_array_new, $current_user_id);
        // print_r($resume_insert_query);

        //skills instertion query
        $skills_array_new = array();
        foreach ($skills_array as $x => $val) {
            array_push($skills_array_new, "'$val','$skill_score_array[$x]'");
        }
        $skills_insert_query = formulate_query("INSERT INTO `skills` (`id`, `skill`, `percentage`) VALUES", $skills_array_new, $current_user_id);
        // print_r($skills_insert_query);







        //query executions
        //mysqli_query($conn, $register_new_user_query)
        // mysqli_query($conn, $professions_insert_query)
        // mysqli_query($conn, $projects_insert_query)
        // mysqli_query($conn, $services_insert_query)
        // mysqli_query($conn, $resume_insert_query)





        // save to db and check
        if (mysqli_query($conn, $register_new_user_query)) {
            // success
            header('Location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }

    // close connection
    mysqli_close($conn);
} // end POST check
?>

<!-- UI -->
<!DOCTYPE HTML>

<html>

<head>

    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="assets/css/login_page.css" />
    <script type="text/javascript" src="assets/js/signup.js"></script>

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Sign Up</h1>
            <form action="sign_up_page.php" method="POST">
                <div class="userName">
                    <label htmlFor="userName">
                        User Name
                    </label>
                    <input name="user_name" placeholder="user name" type="text" value="<?php echo htmlspecialchars($user_name) ?>"></input>
                    <div class="red-text">
                        <?php echo $errors['user_name']; ?>
                    </div>
                </div>
                <div class="password">
                    <label htmlFor="password">
                        password
                    </label>
                    <input name="password" class="passwordInput" placeholder="password" type="password" value="<?php echo htmlspecialchars($password) ?>"></input>
                    <div class="red-text">
                        <?php echo $errors['password']; ?>
                    </div>

                </div>
                <div class="password">
                    <label htmlFor="password-re">
                        re-enter password
                    </label>
                    <input name="password_re" class="passwordInput" placeholder="re-enter password" type="password" value="<?php echo htmlspecialchars($password_re) ?>"></input>
                    <div class="red-text">
                        <?php echo $errors['password_re']; ?>
                    </div>
                </div>
                <div class="buttonDiv">
                    <button name="submit" type="submit" class="loginBtn" id="signUpBtn">Sign Up</button>
                </div>
                <div class="buttonDiv">
                    <button name="login" class="loginBtn" id="loginBtn">Login</button>
                </div>
            </form>

        </div>
    </div>

    </div>
</body>

</html>