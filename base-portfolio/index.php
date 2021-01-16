<!--
field validations
red text css
  -->
<?php include 'utils/constants.php'; ?>
<?php


include('services/db_service.php');

$user_email = $user_password = '';
$errors = array('user_email' => '', 'user_password' => '');

if (isset($_POST['signup'])) {
    header('Location: sign_up_page.php');
}
//post
if (isset($_POST['submit'])) {
    // check user_email
    if (empty($_POST['user_email'])) {
        $errors['user_email'] = 'a email is required';
    } else {
        $user_email = $_POST['user_email'];
    }

    // check password
    if (empty($_POST['user_password'])) {
        $errors['user_password'] = 'A password is required';
    } else {
        $user_password = $_POST['user_password'];
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
        $email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $password = mysqli_real_escape_string($conn, $_POST['user_password']);

        // create sql
        // $sql = 'SELECT * FROM users WHERE email=' . "$email" . ' AND password=' . "$password";
        $get_user_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        // save to db and check
        if (mysqli_query($conn, $get_user_query)) {
            // success
            $user_result = mysqli_query($conn, $get_user_query);
            $user = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
            if (count($user) > 0) {
                print_r($user[0]['id']);
                header('Location: decision_page.php?' . $user[0]['id']);
            } else {
                $errors['user_password'] = 'email or password is wrong !';
            }
        } else {

            echo 'query error: ' . $get_user_query;
            echo 'query error: ' . mysqli_error($conn);
        }
    }

    // close connection
    mysqli_close($conn);
} // end POST check
?>

<!DOCTYPE HTML>

<html>

<head>
    <?php include 'utils/constants.php'; ?>
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="assets/css/login_page.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <!-- {showLoadingDialog ? <OrangeLoader></OrangeLoader> : <div> -->
            <h2 style="font-family:'san-serif'; text-align:center;">WELCOME</h2>
            <form action="index.php" method="POST">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="user_email" id="username" value="<?php echo htmlspecialchars($user_email) ?>" placeholder=" user email" required>
                    <div class="invalid-feedback">
                        <!-- username empty -->
                        <?php echo $errors['user_email']; ?>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <input type="password" class="form-control passwordInput" name="user_password" id="password" value="<?php echo htmlspecialchars($user_password) ?>" placeholder="password" required>
                    <div class="invalid-feedback">
                    <?php echo $errors['user_password']; ?>
                    </div>
                </div>
                <!-- <div class="buttonDiv">
                    <button name="submit" type="submit" class="loginBtn" id="loginBtn">Login</button>
                </div> -->

                <div class="col-12 buttonDiv">
                    <!-- <button name="submit" type="submit" class="btn btn-primary loginBtn" id="loginBtn">Login</button> -->
                    <button name ="submit" type="submit" class="btn btn-primary loginBtn" id="loginBtn">Login<i class="fa fa-sign-in"></i></button>
                </div>
<!-- 
                <div class="buttonDiv">
                    <button name="signup" class="loginBtn" id="signUpBtn">Sign Up</button>
                </div> -->
            </form>
            <div class="col-12 buttonDiv">
                    <button name="signup" class="btn btn-primary loginBtn" id="signUpBtn">Signup</button>
            </div>
            <!-- {faildStatus ? <p class="warning">{desc}</p> :
                    <div />} -->
        </div>
    </div>

    <!-- </div> -->
    <!-- <script type="text/javascript" src="assets/js/login.js"></script> -->
    <script>
        document.getElementById("signUpBtn").onclick = function(event) {
            event.preventDefault();
            console.log("signup clicked");
            window.location = "sign_up_page.php";
        };
    </script>
</body>

</html>