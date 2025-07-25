<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap_css.php"); ?>
    <title>Instagram Sidebar</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #fff;
        color: #262626;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        background-color: #fff;
        height: 100vh;
        border-right: 1px solid #dbdbdb;
        position: fixed;
        left: 0;
        top: 0;
        transition: all 0.3s ease;
        overflow-y: auto;
    }

    .sidebar-full {
        width: 245px;
        padding: 32px 0px;
    }

    .sidebar-collapsed {
        width: 72px;
        padding: 32px 0px;
    }

    .instagram-logo {
        font-size: 29px;
        font-weight: normal;
        color: #262626;
        text-decoration: none;
        font-family: 'Dancing Script', 'Billabong', 'Instagram Sans', cursive;
        letter-spacing: 0.5px;
        margin-bottom: 0;
        display: block;
    }

    .logo-icon {
        width: 24px;
        height: 24px;
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
    }

    .nav-item {
        color: #262626;
        text-decoration: none;
        padding: 12px 0px;
        border-radius: 8px;
        margin-bottom: 2px;
        margin-left: 8px;
        cursor: pointer;
        transition: background-color 0.2s;
        position: relative;
    }

    .nav-item:hover {
        background-color: #f2f2f2;
        color: #262626;
    }

    .nav-item i {
        font-size: 24px;
        font-weight: 900;
        margin-right: 16px;
        margin-left: 4px;
        width: 24px;
        text-align: center;
        color: #262626;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-item span {
        font-size: 16px;
        font-weight: bolder;
        color: #262626;
        display: flex;
        align-items: center;
    }

    .profile-img {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        margin-right: 16px;
        margin-left: 4px;
        display: flex;
        align-items: center;
    }

    .bottom-nav {
        margin-top: auto;
        padding-top: 20px;
    }

    /* Dropdown Menu Styles */
    .dropdown-menu {
        position: absolute;
        bottom: 140px;
        left: 20px;
        background: #fff;
        border: 1px solid #dbdbdb;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        width: 220px;
        padding: 8px 0;
        z-index: 1000;
        display: none;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 8px 16px;
        color: #262626;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f2f2f2;
        color: #262626;
    }

    .dropdown-item i {
        font-size: 16px;
        margin-right: 12px;
        width: 16px;
        color: #262626;
    }

    .dropdown-divider {
        height: 1px;
        background-color: #dbdbdb;
        margin: 8px 0;
    }

    .dropdown-section {
        padding: 8px 16px;
        color: #8e8e8e;
        font-size: 14px;
        font-weight: 600;
    }

    /* Text hiding for collapsed state */
    .nav-text {
        transition: opacity 0.3s ease;
    }

    /* Responsive breakpoints */
    @media (min-width: 1281px) {
        .sidebar {
            width: 245px !important;
            padding: 32px 0px !important;
        }

        .nav-text {
            display: inline !important;
        }

        .instagram-logo {
            display: block !important;
            margin-left: 24px;
        }

        .logo-icon {
            display: none !important;
        }

        .nav-item {
            margin-left: 24px !important;
            margin-right: 24px !important;
        }
    }

    @media (max-width: 1280px) and (min-width: 768px) {
        .sidebar {
            width: 72px !important;
            padding: 32px 0px !important;
        }

        .nav-text {
            display: none !important;
        }

        .instagram-logo {
            display: none !important;
        }

        .logo-icon {
            display: flex !important;
            margin: 0 auto 24px auto;
        }

        .nav-item {
            margin-left: 0px !important;
            justify-content: center !important;
            padding: 12px 0px !important;
        }

        .nav-item i {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .profile-img {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .dropdown-menu {
            left: 72px !important;
            bottom: 160px !important;
        }
    }

    @media (max-width: 767px) {
        .sidebar {
            display: none !important;
        }
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 d-flex flex-column">
                    <!-- Logo Section -->
                    <div class="row">
                        <div class="col-12 mb-4 p-0">
                            <img src="https://www.citypng.com/public/uploads/preview/-11590321548vfiwckfjs3.png"
                                width="150px" alt="" class="instagram-logo">
                            <div class="logo-icon">
                                <i class="bi bi-instagram"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Items -->
                    <div class="row flex-grow-1">
                        <div class="col-12 p-0">
                            <div class="d-flex flex-column ">
                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-house-door-fill"></i>
                                    <span class="nav-text">Home</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-search"></i>
                                    <span class="nav-text">Search</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-compass"></i>
                                    <span class="nav-text">Explore</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-camera-reels"></i>
                                    <span class="nav-text">Reels</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-chat"></i>
                                    <span class="nav-text">Messages</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-heart"></i>
                                    <span class="nav-text">Notifications</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-plus-square"></i>
                                    <span class="nav-text">Create</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/General_Qamar_Javed_Bajwa.jpg/250px-General_Qamar_Javed_Bajwa.jpg"
                                        alt="Profile" class="profile-img">
                                    <span class="nav-text">Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Navigation -->
                    <div class="row bottom-nav">
                        <div class="col-12 p-0">
                            <div class="d-flex flex-column">
                                <a href="#" class="nav-item d-flex align-items-center" onclick="toggleDropdown()">
                                    <i class="bi bi-list"></i>
                                    <span class="nav-text">More</span>
                                </a>

                                <a href="#" class="nav-item d-flex align-items-center">
                                    <i class="bi bi-boxes"></i>
                                    <span class="nav-text">Also from Meta</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dropdown Menu -->
        <div class="dropdown-menu" id="moreDropdown">
            <a href="#" class="dropdown-item">
                <i class="bi bi-gear"></i>
                Settings
            </a>
            <a href="#" class="dropdown-item">
                <i class="bi bi-clock-history"></i>
                Your activity
            </a>
            <a href="#" class="dropdown-item">
                <i class="bi bi-bookmark"></i>
                Saved
            </a>
            <a href="#" class="dropdown-item">
                <i class="bi bi-moon"></i>
                Switch appearance
            </a>
            <a href="#" class="dropdown-item">
                <i class="bi bi-exclamation-circle"></i>
                Report a problem
            </a>

            <div class="dropdown-divider"></div>

            <div class="dropdown-section">Switch accounts</div>

            <div class="dropdown-divider"></div>

            <a href="logout.php" class="dropdown-item">
                Log out
            </a>
        </div>
    </div>

    <script>
    function toggleDropdown() {
        const dropdown = document.getElementById('moreDropdown');
        dropdown.classList.toggle('show');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('moreDropdown');
        const moreButton = event.target.closest('.nav-item');

        if (!dropdown.contains(event.target) && !moreButton) {
            dropdown.classList.remove('show');
        }
    });
    </script>
</body>

</html>