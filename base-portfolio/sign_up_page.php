<!--
degree , email , resume, validation , image backgroud , imge circle , logo common , twitter -> git logo , grid bug
  -->
<?php include 'utils/constants.php'; ?>
<?php


include 'services/db_service.php';
include 'utils/sample_data.php';
include 'utils/query_functions.php';

//use this id for the insertion queries

$current_user_id = $last_id + 1;
print_r($current_user_id);




$user_name = $password = $password_re = $about_1 = $about_2 = $about_3  = $main_profession = $phone = $birthday = $city = $age = $degree = $website = $email = $facts = $clients = $hours = $workers = $skills = $portfolio = $profile_photo_url = $github_url = $linkedin_url = $instagram_url = '';
$errors = array('user_name' => '', 'password' => '', 'password_re' => '', 'degree' => '', 'email' => '', 'about_1' => '', 'about_2' => '', 'about_3' => '', 'main_profession' => '', 'birthday' => '', 'website' => '', 'phone' => '', 'city' => '', 'age' => '', 'facts' => '', 'clients' => '', 'projects' => '', 'hours' => '', 'workers' => '', 'skills' => '', 'portfolio' => '', 'services' => '');

if (isset($_POST['login'])) {
    header('Location: index.php');
}
//post
if (isset($_POST['submit'])) {

    echo ('inside submit');

    echo ($_POST['main_profession']);

    // check user_name
    if (empty($_POST['user_name'])) {
        echo ('inside username check');
        $errors['user_name'] = 'a name is required';
    } else {
        $user_name = $_POST['user_name'];
    }

    //check about_1
    if (empty($_POST['about_1'])) {
        $errors['about_1'] = 'about_1 is required';
    } else {
        $about_1 = $_POST['about_1'];
    }

    //check about_2
    if (empty($_POST['about_2'])) {
        $errors['about_2'] = 'about_2 is required';
    } else {
        $about_2 = $_POST['about_2'];
    }

    //check about_3
    if (empty($_POST['about_3'])) {
        $errors['about_3'] = 'about_3 is required';
    } else {
        $about_3 = $_POST['about_3'];
    }

    //check website
    if (empty($_POST['website'])) {
        $errors['website'] = 'website is required';
    } else {
        $website = $_POST['website'];
    }

    //check birthday
    if (empty($_POST['birthday'])) {
        $errors['birthday'] = 'birthday is required';
    } else {
        $birthday = $_POST['birthday'];
    }

    if (empty($_POST['phone'])) {
        $errors['phone'] = 'phone is required';
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['city'])) {
        $errors['city'] = 'city is required';
    } else {
        $city = $_POST['city'];
    }

    if (empty($_POST['age'])) {
        $errors['age'] = 'age is required';
    } else {
        $age = $_POST['age'];
    }

    //check main_profession
    if (empty($_POST['main_profession'])) {
        $errors['main_profession'] = 'main_profession is required';
    } else {
        $main_profession = $_POST['main_profession'];
    }

    //check facts
    if (empty($_POST['facts'])) {
        $errors['facts'] = 'facts is required';
    } else {
        $facts = $_POST['facts'];
    }

    //check workers
    if (empty($_POST['workers'])) {
        $errors['workers'] = 'workers is required';
    } else {
        $workers = $_POST['workers'];
    }

    //check clients
    if (empty($_POST['clients'])) {
        $errors['clients'] = 'clients is required';
    } else {
        $clients = $_POST['clients'];
    }

    if (empty($_POST['projects'])) {
        $errors['projects'] = 'projects is required';
    } else {
        $projects = $_POST['projects'];
    }

    //check hours
    if (empty($_POST['hours'])) {
        $errors['hours'] = 'hours is required';
    } else {
        $hours = $_POST['hours'];
    }

    //check skills
    if (empty($_POST['skills'])) {
        $errors['skills'] = 'skills is required';
    } else {
        $skills = $_POST['skills'];
    }

    //check portfolio
    if (empty($_POST['portfolio'])) {
        $errors['portfolio'] = 'portfolio is required';
    } else {
        $portfolio = $_POST['portfolio'];
    }

    //check services
    if (empty($_POST['services'])) {
        $errors['services'] = 'services is required';
    } else {
        $services = $_POST['services'];
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

        // professions dynamic list
        // name="profession_name[]"

        // projects dynamic list
        // name="name[]"
        // name="image_url[]"
        // name="link[]"


        $name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_re = mysqli_real_escape_string($conn, $_POST['password_re']);

        $about_1 = mysqli_real_escape_string($conn, $_POST['about_1']);
        $about_2 = mysqli_real_escape_string($conn, $_POST['about_2']);
        $about_3 = mysqli_real_escape_string($conn, $_POST['about_3']);
        $website = mysqli_real_escape_string($conn, $_POST['website']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);

        $main_profession = mysqli_real_escape_string($conn, $_POST['main_profession']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $facts = mysqli_real_escape_string($conn, $_POST['facts']);
        $clients = mysqli_real_escape_string($conn, $_POST['clients']);
        $projects = mysqli_real_escape_string($conn, $_POST['projects']);
        $hours = mysqli_real_escape_string($conn, $_POST['hours']);
        $workers = mysqli_real_escape_string($conn, $_POST['workers']);
        $skills = mysqli_real_escape_string($conn, $_POST['skills']);
        $portfolio = mysqli_real_escape_string($conn, $_POST['portfolio']);
        $services = mysqli_real_escape_string($conn, $_POST['services']);
        $github_url = mysqli_real_escape_string($conn, $_POST['github_url']);
        $linkedin_url = mysqli_real_escape_string($conn, $_POST['linkedin_url']);
        $instagram_url = mysqli_real_escape_string($conn, $_POST['instagram_url']);
        $profile_photo_url = mysqli_real_escape_string($conn, $_POST['profile_photo_url']);
        $degree = mysqli_real_escape_string($conn, $_POST['degree']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);








        //professions list
        // $professions_array = array("Designer", "Frelancer", "Developer");
        $professions_array = $_POST['professions_array'];


        //projects list
        $project_name_array =  $_POST['project_name_array'];
        $project_image_url_array =  $_POST['project_image_url_array'];
        $project_link_array =  $_POST['project_link_array'];

        //services list 
        $services_array = $_POST['services_array'];
        $services_description_array =  $_POST['services_description_array'];

        //resume list
        $resume_title_array = $_POST['resume_title_array'];
        $resume_start_date_array = $_POST['resume_start_date_array'];
        $resume_end_date_array = $_POST['resume_end_date_array'];
        $resume_place_array = $_POST['resume_place_array'];
        $resume_description_array = $_POST['resume_description_array'];

        //skills list
        $skills_array = $_POST['skills_array'];
        $skill_score_array = $_POST['skill_score_array'];













        //new user data insert query 
        $register_new_user_query = "INSERT INTO users(`id`, `name`, `about_1`, `about_2`, `about_3`, `main_profession`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `email`,`password`, `facts`, `clients`, `projects`, `hours`, `workers`, `skills`, `portfolio`, `services`, `profile_photo_url`, `github_url`, `linkedin_url`, `instagram_url`)
         VALUES (NULL, '$name', '$about_1', '$about_2', '$about_3', '$main_profession', '$birthday', '$website', '$phone', '$city', '$age', '$degree', '$email','$password', '$facts', '$clients', '$projects', '$hours', '$workers', '$skills', '$portfolio', '$services','$profile_photo_url', '$github_url', '$linkedin_url', '$instagram_url')";
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

        foreach ($project_name_array as $x => $val) {
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
        //mysqli_query($conn, $skills_insert_query)



        // save to db and check
        if (mysqli_query($conn, $register_new_user_query) and mysqli_query($conn, $professions_insert_query) and mysqli_query($conn, $projects_insert_query) and mysqli_query($conn, $services_insert_query) and mysqli_query($conn, $resume_insert_query) and mysqli_query($conn, $skills_insert_query)) {
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
    <link rel="stylesheet" href="assets/css/signup_page.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Sign Up</h1>
            <form method='POST' action="sign_up_page.php" class="row g-3 needs-validation" novalidate>

                <!-- username -->
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user_name" id="username" value="<?php echo htmlspecialchars($user_name) ?>" required>
                    <div class="invalid-feedback">
                        username empty
                    </div>
                </div>

                <!-- password -->
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?php echo htmlspecialchars($password) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['password']; ?>
                    </div>
                </div>

                <!-- confirm_password -->
                <div class="col-md-6">
                    <label for="password_re" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_re" id="password_re" value="<?php echo htmlspecialchars($password_re) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['password_re']; ?>
                    </div>
                </div>

                <!-- about_1 -->
                <div class="col-md-12">
                    <label for="about_1" class="form-label">About_1</label>
                    <textarea type="text" class="form-control" name="about_1" id="about_1" value="<?php echo htmlspecialchars($about_1) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <?php echo $errors['about_1']; ?>
                    </div>
                </div>

                <!-- about_2 -->
                <div class="col-md-12">
                    <label for="about_2" class="form-label">About_2</label>
                    <textarea type="text" class="form-control" name="about_2" id="about_2" value="<?php echo htmlspecialchars($about_2) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <?php echo $errors['about_2']; ?>
                    </div>
                </div>

                <!-- about_3 -->
                <div class="col-md-12">
                    <label for="about_3" class="form-label">About_3</label>
                    <textarea type="text" class="form-control" name="about_3" id="about_3" value="<?php echo htmlspecialchars($about_3) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <?php echo $errors['about_3']; ?>
                    </div>
                </div>

                <!-- main-profession  -->
                <div class="col-md-3">
                    <label for="main_profession" class="form-label">Main Profession</label>
                    <input type="text" class="form-control" name="main_profession" id="main_profession" value="<?php echo htmlspecialchars($main_profession) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['main_profession']; ?>
                    </div>
                </div>

                <!-- birthday -->
                <div class="col-md-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="text" class="form-control" name="birthday" id="datepicker" value="<?php echo htmlspecialchars($birthday) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['birthday']; ?>
                    </div>
                </div>

                <!-- website -->
                <div class="col-md-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control" name="website" id="website" value="<?php echo htmlspecialchars($website) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['website']; ?>
                    </div>
                </div>

                <!-- phone -->
                <div class="col-md-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" name="phone" id="phone" value="<?php echo htmlspecialchars($phone) ?>" required>
                    ` <div class="invalid-feedback">
                        <?php echo $errors['phone']; ?>
                    </div>
                </div>

                <!-- degree -->
                <div class="col-md-3">
                    <label for="degree" class="form-label">Degree</label>
                    <input type="text" class="form-control" name="degree" id="degree" value="<?php echo htmlspecialchars($degree) ?>" required>
                    ` <div class="invalid-feedback">
                        <?php echo $errors['degree']; ?>
                    </div>
                </div>

                <!-- email -->
                <div class="col-md-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>" required>
                    ` <div class="invalid-feedback">
                        <?php echo $errors['email']; ?>
                    </div>
                </div>

                <!-- city -->
                <div class="col-md-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo htmlspecialchars($city) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['city']; ?>
                    </div>
                </div>

                <!-- age  -->
                <div class="col-md-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" id="age" value="<?php echo htmlspecialchars($age) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['age']; ?>
                    </div>
                </div>

                <!-- facts -->
                <div class="col-md-12">
                    <label for="facts" class="form-label">Facts</label>
                    <textarea type="text" class="form-control" name="facts" id="facts" value="<?php echo htmlspecialchars($facts) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <p><?php echo $errors['facts']; ?></p>
                    </div>
                </div>

                <!-- clients -->
                <div class="col-md-3">
                    <label for="clients" class="form-label">Clients</label>
                    <input type="number" class="form-control" name="clients" id="clients" value="<?php echo htmlspecialchars($clients) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['clients']; ?>
                    </div>
                </div>

                <!-- projects -->
                <div class="col-md-3">
                    <label for="projects" class="form-label">Projects</label>
                    <input type="number" class="form-control" name="projects" id="projects" value="<?php echo htmlspecialchars($projects) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['projects']; ?>
                    </div>
                </div>

                <!-- hours -->
                <div class="col-md-3">
                    <label for="hours" class="form-label">Hours</label>
                    <input type="number" class="form-control" name="hours" id="hours" value="<?php echo htmlspecialchars($hours) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['hours']; ?>
                    </div>
                </div>

                <!-- workers -->
                <div class="col-md-3">
                    <label for="workers" class="form-label">Workers</label>
                    <input type="number" class="form-control" name="workers" id="workers" value="<?php echo htmlspecialchars($workers) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['workers']; ?>
                    </div>
                </div>

                <!-- skills  -->
                <div class="col-md-12">
                    <label for="skills" class="form-label">Skills</label>
                    <textarea type="text" class="form-control" name="skills" id="skills" value="<?php echo htmlspecialchars($skills) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <p><?php echo $errors['skills']; ?></p>
                    </div>
                </div>

                <!-- porfolio -->
                <div class="col-md-12">
                    <label for="portfolio" class="form-label">Portfolio</label>
                    <textarea type="text" class="form-control" name="portfolio" id="portfolio" value="<?php echo htmlspecialchars($portfolio) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <p><?php echo $errors['portfolio']; ?></p>
                    </div>
                </div>

                <!-- services -->
                <div class="col-md-12">
                    <label for="services" class="form-label">Services</label>
                    <textarea type="text" class="form-control" name="services" id="services" value="<?php echo htmlspecialchars($services) ?>" required></textarea>
                    <div class="invalid-feedback">
                        <p><?php echo $errors['services']; ?></p>
                    </div>
                </div>

                <!-- profile pic -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image input</label>
                    <input class="form-control" type="file" accept="image/*" id="formFile" name='profile_photo_url'>
                </div>

                <!-- github URL -->
                <div class="col-md-4">
                    <label for="github_url" class="form-label">Github URL</label>
                    <input type="text" class="form-control" name="github_url" id="github_url" value="<?php echo htmlspecialchars($github_url) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['github_url']; ?>
                    </div>
                </div>

                <!-- linkedin_url -->
                <div class="col-md-4">
                    <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                    <input type="text" class="form-control" name="linkedin_url" id="linkedin_url" value="<?php echo htmlspecialchars($linkedin_url) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['linkedin_url']; ?>
                    </div>
                </div>

                <!-- instagram_url -->
                <div class="col-md-4">
                    <label for="instagram_url" class="form-label">Instagram URL</label>
                    <input type="text" class="form-control" name="instagram_url" id="instagram_url" value="<?php echo htmlspecialchars($instagram_url) ?>" required>
                    <div class="invalid-feedback">
                        <?php echo $errors['instagram_url']; ?>
                    </div>
                </div>

                <!-- add profession -->
                <div class="col-md-12 add_profession">
                    <button class="add_profession_button btn btn-primary">Add Profession &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <!-- <div><input type="text" class="form-control" name="xyz"></div> -->
                </div>

                <!-- add product -->
                <div class="col-md-12 add_product">
                    <button class="add_product_button btn btn-primary">Add product &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <!-- <div><input type="text" class="form-control" name="xyz"></div> -->
                </div>


                <!-- add resume -->
                <div class="col-md-12 add_resume">
                    <button class="add_resume_button btn btn-primary">Add resume &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <!-- <div><input type="text" class="form-control" name="xyz"></div> -->
                </div>

                <!-- add service -->
                <div class="col-md-12 add_service">
                    <button class="add_service_button btn btn-primary">Add service &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <!-- <div><input type="text" class="form-control" name="xyz"></div> -->
                </div>

                <!-- add skill -->
                <div class="col-md-12 add_skill">
                    <button class="add_skill_button btn btn-primary">Add skill &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <!-- <div><input type="text" class="form-control" name="xyz"></div> -->
                </div>




                <!-- <div class="col-md-3">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              	</div> -->
                <!-- <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              	</div> -->
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button name="submit" class="btn btn-primary" type="submit">Submit form</button>
                </div>

                <div class="col-12">
                    <button name="login" class="btn btn-primary" id="loginBtn">Login</button>
                </div>


            </form>






            <!--             
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
            </form> -->

            <!-- </div> -->
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/signup.js"></script>

    <!-- <script>

    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>