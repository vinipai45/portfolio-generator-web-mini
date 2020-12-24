<!--
field validations
red text css
add all fields
  -->
<?php include 'utils/constants.php'; ?>
<?php


include('services/db_service.php');

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
        $password_re = mysqli_real_escape_string($conn, $_POST['password_re']);

        // create sql
        $sql = "INSERT INTO users(name,password,password_re) VALUES('$name','$password','$password_re')";

        // save to db and check
        if (mysqli_query($conn, $sql)) {
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