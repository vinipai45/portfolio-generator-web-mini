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
            <form onsubmit="event.preventDefault();">
                <div class="userName">
                    <label htmlFor="userName">
                        User Name
                    </label>
                    <input placeholder="user name" type="text"></input>
                </div>
                <div class="password">
                    <label htmlFor="password">
                        password
                    </label>
                    <input class="passwordInput" placeholder="password" type="password"></input>
                </div>
                <div class="buttonDiv">

                    <button class="loginBtn" id="loginBtn">Login</button>


                </div>
                <div class="buttonDiv">

                    <button class="loginBtn" id="signUpBtn">Sign Up</button>

                </div>
            </form>
            <!-- {faildStatus ? <p class="warning">{desc}</p> :
                    <div />} -->

        </div>
    </div>

    </div>
</body>

</html>