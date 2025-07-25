<?php
session_start();
// User already logged in? Redirect before any HTML output!
if (isset($_SESSION['ticket'])) {
    header("Location: http://localhost:3000/index.php");
    exit; // Always use exit after header redirect
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap_css.php"); ?>
    <title>Instagram Signup</title>
    <style>
    body {
        background: #fff;
        min-height: 100vh;
    }

    .signup-main {
        min-height: 100vh;
        display: flex;
        align-items: flex-start;
        /* Change from center to flex-start */
        justify-content: center;
        padding-top: 60px;
        /* Add some top space */
    }

    .signup-box {
        background: #fff;
        border: 1px solid #dbdbdb;

        padding: 32px 32px 24px 32px;
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.04);
        max-width: 380px;
        width: 100%;
        margin: 0 auto;
    }

    .signup-logo {
        font-family: 'Grand Hotel', cursive;
        font-size: 2.5rem;
        color: #222;
        text-align: center;
        margin-bottom: 12px;
    }

    .signup-facebook-btn {
        background: #385185;
        color: #fff;
        font-weight: bold;
        border-radius: 6px;
        width: 100%;
        margin-bottom: 12px;
    }

    .signup-or-divider {
        text-align: center;
        margin: 18px 0 10px 0;
        color: #999;
        font-size: 14px;
        position: relative;
    }

    .signup-or-divider:before,
    .signup-or-divider:after {
        content: "";
        display: inline-block;
        width: 40%;
        height: 1px;
        background: #dbdbdb;
        vertical-align: middle;
        margin: 0 8px;
    }

    .signup-form .form-control {
        background: #fafafa;
        border-radius: 4px;
        border: 1px solid #dbdbdb;
        margin-bottom: 10px;
        font-size: 15px;
    }

    .signup-btn {
        background: #3897f0;
        color: #fff;
        font-weight: bold;
        border-radius: 6px;
        width: 100%;
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .signup-info,
    .signup-policy {
        font-size: 13px;
        color: #555;
        text-align: center;
        margin-bottom: 8px;
    }

    .signup-policy a {
        color: #385185;
        text-decoration: none;
    }

    .signup-policy a:hover {
        text-decoration: underline;
    }

    .login-box {
        background: #fff;
        border: 1px solid #dbdbdb;

        padding: 18px 0;
        text-align: center;
        max-width: 380px;
        width: 100%;
        margin: 18px auto 0 auto;
    }

    .login-box a {
        color: #3897f0;
        font-weight: bold;
        text-decoration: none;
    }

    .login-box a:hover {
        text-decoration: underline;
    }

    .signup-footer {
        text-align: center;
        color: #999;
        font-size: 13px;
        margin-top: 32px;
    }

    .signup-footer a {
        color: #999;
        margin: 0 6px;
        text-decoration: none;
    }

    .signup-footer a:hover {
        text-decoration: underline;
    }

    .signup-logo {
        font-size: 2rem;
    }

    .signup-footer {
        font-size: 11px;
        padding-left: 2px;
        padding-right: 2px;
    }

    @media (max-width: 575.98px) {

        .signup-box,
        .login-box {
            padding: 16px 6px;
            max-width: 350px;
            /* Change from 98vw to fixed width */
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    .signup-logo {
        font-size: 2rem;
    }

    .signup-footer {
        font-size: 11px;
        padding-left: 2px;
        padding-right: 2px;
    }
    </style>
</head>




<body>
    <div class="signup-main">
        <div>
            <div class="signup-box">
                <img src="https://www.citypng.com/public/uploads/preview/-11590321548vfiwckfjs3.png" width="150px"
                    alt="" class="instagram-logo d-block mx-auto text-center mb-2">
                <div class="text-center mb-2 fw-semibold" style="font-size:16px; color:#222;">
                    Sign up to see photos and videos from your friends.
                </div>
                <button class="btn signup-facebook-btn mb-2" style="background:#3897f0;">
                    <i class="bi bi-facebook"></i> Log in with Facebook
                </button>
                <div class="signup-or-divider">OR</div>
                <form action="./register-user.php" class="signup-form" method="POST">
                    <input type="text" class="form-control" name="m_mail" placeholder="Mobile Number or Email">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <div class="signup-info">
                        People who use our service may have uploaded your contact information to Instagram. <a href="#"
                            class="text-decoration-none">Learn More</a>
                    </div>
                    <div class="signup-policy">
                        By signing up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a
                            href="#">Cookies Policy</a>.
                    </div>
                    <button type="submit" class="btn signup-btn ">Sign up</button>
                </form>
            </div>
            <div class="login-box">
                Have an account? <a href="login.php">Log in</a>
            </div>
        </div>
    </div>
    <div class="signup-footer py-3 px-2">
        <div class="footer-links mb-1">
            Meta · About · Blog · Jobs · Help · API · Privacy · Terms · Locations · Instagram Lite · Threads · Contact
            Uploading & Non-Users · Meta Verified
        </div>
        <div class="footer-meta">
            <span>English</span> © 2025 Instagram from Meta
        </div>
    </div>
</body>

</html>