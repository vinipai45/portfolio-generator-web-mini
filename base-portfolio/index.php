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
                header('Location: home_page.php?' . $user[0]['id']);
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
    <script type="text/javascript" src="assets/js/login.js"></script>

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <!-- {showLoadingDialog ? <OrangeLoader></OrangeLoader> : <div> -->
            <h1>WELCOME USER</h1>
            <form action="index.php" method="POST">
                <div class="userName">
                    <label htmlFor="useremail">
                        User email
                    </label>
                    <input name="user_email" value="<?php echo htmlspecialchars($user_email) ?>" placeholder=" user email" type="text"></input>
                    <div class="red-text">
                        <?php echo $errors['user_email']; ?>
                    </div>
                </div>
                <div class="password">
                    <label htmlFor="password">
                        password
                    </label>
                    <input name="user_password" value="<?php echo htmlspecialchars($user_password) ?>" class=" passwordInput" placeholder="password" type="password"></input>
                    <div class="red-text">
                        <?php echo $errors['user_password']; ?>
                    </div>
                </div>
                <div class="buttonDiv">

                    <button name="submit" type="submit" class="loginBtn" id="loginBtn">Login</button>


                </div>
                <div class="buttonDiv">

                    <button name="signup" class="loginBtn" id="signUpBtn">Sign Up</button>

                </div>
            </form>
            <!-- {faildStatus ? <p class="warning">{desc}</p> :
                    <div />} -->

        </div>
    </div>

    </div>
</body>

</html>