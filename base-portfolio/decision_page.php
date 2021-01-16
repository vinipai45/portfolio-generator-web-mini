<?php 

$user_id = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$decision_path = "decision_page.php?" . $user_id;

// echo $user_id;
// echo "Location: update_profile_page.php?" . $user_id;

if (isset($_POST['update-profile'])) {
    // header('Location: update_profile_page.php?1');
    header('Location: update_profile_page.php?' . $user_id);
}
if (isset($_POST['visit-profile'])) {
    // header('Location: home_page.php?1');
    header('Location: home_page.php?' . $user_id);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login_page.css" />

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper">
        <form action="<?php echo $decision_path; ?>" method="POST">
            <!-- {showLoadingDialog ? <OrangeLoader></OrangeLoader> : <div> -->
            <h2 style="font-family:'san-serif'; text-align:center;">What would you like to do ?</h2>

            <div class="col-12 buttonDiv">
                <button name="update-profile" class="btn btn-primary loginBtn" id="update-profile">Update Profile</button>
            </div>
            <div class="col-12 buttonDiv">
                <button name="visit-profile" class="btn btn-primary loginBtn" id="visit-profile">Visit Portfolio</button>
            </div>
        </form>
            <!-- {faildStatus ? <p class="warning">{desc}</p> :
                    <div />} -->
        </div>
    </div>

</body>

</html>