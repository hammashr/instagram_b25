<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap_css.php"); ?>
    <title>Instagram User Section</title>
    <style>
    .user-section {
        max-width: 350px;
        min-width: 220px;
        border-radius: 8px;
        padding: 0;
    }

    @media (max-width: 1270px) {
        .user-section {
            display: none !important;
        }
    }

    @media (max-width: 991.98px) {
        .user-section {
            max-width: 100%;
            min-width: 0;
            padding: 1rem !important;
        }

        .footer-links {
            font-size: 11px !important;
        }
    }

    @media (max-width: 767.98px) {
        .user-section {
            padding: 0.5rem !important;
            border-radius: 0;
        }

        .footer-links {
            font-size: 10px !important;
        }
    }
    </style>
</head>

<body>
    <div class="user-section bg-white p-3">
        <!-- Current User -->
        <div class="d-flex align-items-center justify-content-between mb-2">
            <div class="d-flex align-items-center">
                <img src="https://media.gettyimages.com/id/1535615626/photo/raisi-asim-munir-meeting-in-tehran.jpg?b=1&s=594x594&w=0&k=20&c=aJuWfrZM5upYhb-2jZw77aJNi-qUCrARtKYpDfEtVDU="
                    class="rounded-circle me-2 " style="object-fit: cover;" width="44" height="44" alt="profile">
                <div>
                    <div class="fw-bold" style="font-size:15px;">hammadashraf9_9</div>
                    <div class="text-muted" style="font-size:13px;">Ammod Schoref</div>
                </div>
            </div>
            <a href="#" class="text-primary fw-bold" style="font-size:13px;">Switch</a>
        </div>
        <!-- Suggestions Header -->
        <div class="d-flex align-items-center justify-content-between mt-3 mb-2">
            <span class="text-muted fw-bold" style="font-size:14px;">Suggested for you</span>
            <a href="#" class="fw-bold" style="font-size:13px;">See All</a>
        </div>
        <!-- Suggestions List -->
        <div class="suggestion-list">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                        style="object-fit: cover;" class="rounded-circle me-2" width="36" height="36" alt="user">
                    <div>
                        <div class="fw-bold" style="font-size:14px;">m_qasim_01</div>
                        <div class="text-muted" style="font-size:12px;">Followed by umair_0.5 + 3 more</div>
                    </div>
                </div>
                <a href="#" class="text-primary fw-bold" style="font-size:13px;">Follow</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                        style="object-fit: cover;" class="rounded-circle me-2" width="36" height="36" alt="user">
                    <div>
                        <div class="fw-bold" style="font-size:14px;">umer_chaudhary.26</div>
                        <div class="text-muted" style="font-size:12px;">Followed by ali.nasixx + 6 more</div>
                    </div>
                </div>
                <a href="#" class="text-primary fw-bold" style="font-size:13px;">Follow</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                        style="object-fit: cover;" class="rounded-circle me-2" width="36" height="36" alt="user">
                    <div>
                        <div class="fw-bold" style="font-size:14px;">tanolifaizan289</div>
                        <div class="text-muted" style="font-size:12px;">Suggested for you</div>
                    </div>
                </div>
                <a href="#" class="text-primary fw-bold" style="font-size:13px;">Follow</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                        style="object-fit: cover;" class="rounded-circle me-2" width="36" height="36" alt="user">
                    <div>
                        <div class="fw-bold" style="font-size:14px;">ziyadkhan0</div>
                        <div class="text-muted" style="font-size:12px;">Followed by abdullahatif08 + 4 ...</div>
                    </div>
                </div>
                <a href="#" class="text-primary fw-bold" style="font-size:13px;">Follow</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                        style="object-fit: cover;" class="rounded-circle me-2" width="36" height="36" alt="user">
                    <div>
                        <div class="fw-bold" style="font-size:14px;">sufya_n4249</div>
                        <div class="text-muted" style="font-size:12px;">Followed by wajidxbari... + 6 more</div>
                    </div>
                </div>
                <a href="#" class="text-primary fw-bold" style="font-size:13px;">Follow</a>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer-links mt-3" style="font-size:12px;">
            <div class="text-muted mb-1">
                About · Help · Press · API · Jobs · Privacy · Terms
            </div>
            <div class="text-muted mb-1">
                Locations · Language · Meta Verified
            </div>
            <div class="text-muted">
                © 2025 INSTAGRAM FROM META
            </div>
        </div>
    </div>

</body>

</html>