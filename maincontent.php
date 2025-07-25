<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap_css.php"); ?>
    <title>Instagram Main Content</title>
    <style>
    body {
        background-color: #fff;
        color: #262626;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        margin: 0;
        padding: 0;
    }

    .main-content {
        background-color: #fff;
        max-width: 630px;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    .stories-container {
        padding: 16px 0;
        border-bottom: 1px solid #dbdbdb;
        margin-bottom: 24px;
    }

    .stories-scroll {
        display: flex;
        overflow-x: auto;
        gap: 16px;
        padding: 0 20px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .stories-scroll::-webkit-scrollbar {
        display: none;
    }

    .story-item {
        text-align: center;
        flex-shrink: 0;
        cursor: pointer;
    }

    .story-ring {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        border-radius: 50%;
        padding: 2px;
        display: inline-block;
        margin-bottom: 6px;
    }

    .story-img {
        width: 66px;
        height: 66px;
        border: 3px solid #fff;
        border-radius: 50%;
        display: block;
    }

    .story-username {
        font-size: 12px;
        color: #262626;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 74px;
    }

    .post-card {
        background-color: #fff;
        border: 1px solid #dbdbdb;
        border-radius: 8px;
        margin-bottom: 24px;
        max-width: 470px;
        margin-left: auto;
        margin-right: auto;
    }

    .post-header {
        padding: 16px;
        display: flex;
        align-items: center;
        justify-content: between;
    }

    .post-header-left {
        display: flex;
        align-items: center;
        flex: 1;
    }

    .post-profile-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        margin-right: 12px;
    }

    .post-username {
        font-weight: 600;
        font-size: 14px;
        color: #262626;
        margin-right: 6px;
    }

    .verified-badge {
        color: #1da1f2;
        font-size: 12px;
        margin-right: 6px;
    }

    .post-time {
        color: #8e8e8e;
        font-size: 14px;
    }

    .post-subtitle {
        color: #8e8e8e;
        font-size: 12px;
        margin-top: 2px;
    }

    .post-options {
        cursor: pointer;
        color: #262626;
    }

    .post-content {
        position: relative;
    }

    .post-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .post-text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        z-index: 2;
    }

    .post-text-overlay h3 {
        font-size: 18px;
        margin-bottom: 8px;
        font-weight: 400;
    }

    .post-text-overlay p {
        font-size: 16px;
        margin-bottom: 16px;
        font-weight: 300;
    }

    .post-actions {
        padding: 8px 16px 16px 16px;
    }

    .action-buttons {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .action-left {
        display: flex;
        gap: 16px;
    }

    .action-btn {
        background: none;
        border: none;
        font-size: 24px;
        color: #262626;
        cursor: pointer;
        padding: 0;
    }

    .action-btn:hover {
        color: #8e8e8e;
    }

    .likes-count {
        font-weight: 600;
        font-size: 14px;
        color: #262626;
        margin-bottom: 8px;
    }

    .post-caption {
        font-size: 14px;
        color: #262626;
        line-height: 1.4;
    }

    .post-caption .username {
        font-weight: 600;
        margin-right: 6px;
    }

    .post-caption .follow-link {
        color: #1da1f2;
        font-weight: 600;
        text-decoration: none;
    }

    .post-caption .hashtag {
        color: #1da1f2;
        text-decoration: none;
    }

    .view-more {
        color: #8e8e8e;
        font-size: 14px;
        margin-top: 4px;
        cursor: pointer;
    }

    .comments-section {
        font-size: 14px;
        color: #8e8e8e;
        margin-top: 8px;
        cursor: pointer;
    }

    .add-comment {
        padding: 12px 16px 16px 16px;
        border-top: 1px solid #efefef;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .add-comment input {
        border: none;
        outline: none;
        flex: 1;
        font-size: 14px;
        color: #262626;
        background: transparent;
    }

    .add-comment input::placeholder {
        color: #8e8e8e;
    }

    .post-emoji-btn {
        background: none;
        border: none;
        font-size: 16px;
        color: #262626;
        cursor: pointer;
        margin-left: 8px;
    }

    .post-time-stamp {
        color: #8e8e8e;
        font-size: 10px;
        text-transform: uppercase;
        margin-top: 8px;
        font-weight: 400;
    }

    .mute-btn {
        position: absolute;
        bottom: 16px;
        right: 16px;
        background: rgba(0, 0, 0, 0.7);
        border: none;
        color: #fff;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .insta-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.95);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay-content {
        position: relative;
        width: 80vw;
        max-width: 1100px;
        height: 80vh;
        background: transparent;
        display: flex;
        align-items: stretch;
        border-radius: 12px;
        overflow: hidden;
    }

    .overlay-inner {
        width: 100%;
        height: 100%;
    }

    .overlay-img-col {
        background: #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        background: #000;
    }

    .overlay-comments-col {
        background: #fff;
        height: 100%;
        display: flex;
        flex-direction: column;
        min-width: 350px;
        max-width: 400px;
    }

    .overlay-comments-header {
        border-bottom: 1px solid #eee;
    }

    .overlay-comments-list {
        flex: 1 1 auto;
        overflow-y: auto;
        font-size: 15px;
    }

    .overlay-add-comment {
        border-top: 1px solid #eee;
    }

    .close-btn {
        position: absolute;
        top: 18px;
        right: 24px;
        font-size: 2rem;
        color: #fff;
        background: none;
        border: none;
        z-index: 10001;
        cursor: pointer;
        font-weight: bold;
        transition: color 0.2s;
    }

    .close-btn:hover {
        color: #ff4444;
    }

    @media (max-width: 900px) {
        .overlay-content {
            flex-direction: column;
            width: 98vw;
            height: 98vh;
        }

        .overlay-img-col,
        .overlay-comments-col {
            max-width: 100%;
            min-width: 0;
        }
    }
    </style>
</head>

<body>
    <div class="main-content">
        <!-- Stories Section -->
        <div class="stories-container">
            <div class="stories-scroll">
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIP.KlY3vV5f0QkE7Jod2yvclQHaFj?w=244&h=182&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="hanushka..." class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">hanushka...</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIP.mPe7w2-rDtJQGvAmkrjK6QHaEU?w=304&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="syedaanez..." class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">syedaanez...</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="data:image/webp;base64,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"
                            alt="ch_hammad" class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">ch_hammad</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIP.h7zHh1-fAnmA-yxXRrsvpAHaHa?w=177&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="ali_asif_1" class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">ali_asif_1</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIP.Ab2kF_wGYXDQ-6OrTQ7Y1AHaFW?w=242&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="abk_khan..." class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">abk_khan...</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIF.V7zMf5TUkW51VYOvHKM8dg?w=262&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="zz_plyr_1" class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">zz_plyr_1</div>
                </div>
                <div class="story-item">
                    <div class="story-ring">
                        <img src="https://th.bing.com/th/id/OIP.7RY_mN-bk6veQiPAKwnXeAHaE7?w=280&h=186&c=7&r=0&o=7&pid=1.7&rm=3"
                            alt="asim4418" class="story-img object-fit-cover">
                    </div>
                    <div class="story-username">asim4418</div>
                </div>

            </div>
        </div>

        <!-- Posts Section -->
        <div class="posts-container">
            <!-- Post 1 -->
            <div class="post-card">
                <div class="post-header">
                    <div class="post-header-left">
                        <img src="https://th.bing.com/th/id/ODL.c10bfc17103d52a1e022fb31a85e9259?w=200&h=200&c=12&rs=1&pcl=faf9f7&o=6&pid=AlgoBlockDebug"
                            alt="explaining" class="post-profile-img">
                        <div>
                            <div style="display: flex; align-items: center;">
                                <span class="post-username">explaining</span>
                                <i class="bi bi-patch-check-fill verified-badge"></i>
                                <span class="post-time">• 1d</span>
                            </div>
                            <div class="post-subtitle">Original audio</div>
                        </div>
                    </div>
                    <i class="bi bi-three-dots post-options"></i>
                </div>

                <div class="post-content">
                    <img src="https://media.gettyimages.com/id/1535615626/photo/raisi-asim-munir-meeting-in-tehran.jpg?b=1&s=594x594&w=0&k=20&c=aJuWfrZM5upYhb-2jZw77aJNi-qUCrARtKYpDfEtVDU="
                        alt="Post content" class="post-image">

                    <button class="mute-btn">
                        <i class="bi bi-volume-mute"></i>
                    </button>
                </div>

                <div class="post-actions">
                    <div class="action-buttons">
                        <div class="action-left">
                            <button class="action-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="action-btn"
                                onclick="openOverlay('https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3')">
                                <i class="bi bi-chat"></i>
                            </button>
                            <button class="action-btn">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                        <button class="action-btn">
                            <i class="bi bi-bookmark"></i>
                        </button>
                    </div>

                    <div class="likes-count">9,509 likes</div>

                    <div class="post-caption">
                        <span class="username">explaining</span>
                        <i class="bi bi-patch-check-fill verified-badge"></i>
                        <a href="#" class="follow-link">Follow (us)</a>
                        <a href="#" class="hashtag">@Explaining</a>
                        to learn something NEW every day
                        <i class="bi bi-emoji-smile"></i>
                    </div>

                    <div class="view-more">... more</div>

                    <div class="comments-section">View all 17 comments</div>

                    <div class="post-time-stamp">1 DAY AGO</div>
                </div>

                <div class="add-comment">
                    <input type="text" placeholder="Add a comment..." />
                    <div>
                        <button class="post-emoji-btn">
                            <i class="bi bi-emoji-smile"></i>
                        </button>
                        <button class="post-emoji-btn">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- another post -->
    <div class="posts-container">
        <!-- Post 1 -->
        <div class="post-card">
            <div class="post-header">
                <div class="post-header-left">
                    <img src="https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                        alt="explaining" class="post-profile-img">
                    <div>
                        <div style="display: flex; align-items: center;">
                            <span class="post-username">Top_Performance_Garage</span>
                            <i class="bi bi-patch-check-fill verified-badge"></i>
                            <span class="post-time">• 1d</span>
                        </div>
                        <div class="post-subtitle">Original audio</div>
                    </div>
                </div>
                <i class="bi bi-three-dots post-options"></i>
            </div>

            <div class="post-content">
                <img src="https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                    alt="Post content" class="post-image">

                <button class="mute-btn">
                    <i class="bi bi-volume-mute"></i>
                </button>
            </div>

            <div class="post-actions">
                <div class="action-buttons">
                    <div class="action-left">
                        <button class="action-btn">
                            <i class="bi bi-heart"></i>
                        </button>
                        <button class="action-btn"
                            onclick="openOverlay('https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3')">
                            <i class="bi bi-chat"></i>
                        </button>
                        <button class="action-btn">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                    <button class="action-btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>

                <div class="likes-count">19,509 likes</div>

                <div class="post-caption">
                    <span class="username">Top Performance Garage</span>
                    <i class="bi bi-patch-check-fill verified-badge"></i>
                    <a href="#" class="follow-link">Follow (us)</a>
                    <a href="#" class="hashtag">@Top_Performance_Garage</a>
                    to learn something NEW every day
                    <i class="bi bi-emoji-smile"></i>
                </div>

                <div class="view-more">... more</div>

                <div class="comments-section">View all 17 comments</div>

                <div class="post-time-stamp">1 DAY AGO</div>
            </div>

            <div class="add-comment">
                <input type="text" placeholder="Add a comment..." />
                <div>
                    <button class="post-emoji-btn">
                        <i class="bi bi-emoji-smile"></i>
                    </button>
                    <button class="post-emoji-btn">
                        <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="postOverlay" class="insta-overlay" style="display:none;">
            <div class="overlay-content">

                <div class="overlay-inner row g-0">
                    <!-- Post Image/Content -->
                    <div class="col-md-7 overlay-img-col d-flex align-items-center justify-content-center">
                        <img src="https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                            width="100%" height="100%" alt="Post" class="overlay-img">
                    </div>
                    <!-- Comments Section -->
                    <div class="col-md-5 overlay-comments-col">
                        <!-- Place this inside your .col-md-5.overlay-comments-col div for the white (light) theme Instagram comment sidebar look -->
                        <div class="overlay-comments-col bg-white d-flex flex-column" style="height:100%;">
                            <!-- Header -->
                            <div class="overlay-comments-header d-flex align-items-center justify-content-between px-3 py-2"
                                style="border-bottom:1px solid #efefef;">
                                <div class="d-flex align-items-center">
                                    <img src="https://th.bing.com/th/id/OIP.z1f2ytw-wtDhrqltty6UoAHaE8?w=270&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
                                        class="rounded-circle me-2" width="32" height="32">
                                    <span class="fw-bold">islamabadpolice</span>
                                </div>
                                <button class="btn p-0" style="font-size:1.5rem; color:#262626;"
                                    onclick="closeOverlay()">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <!-- Comments List -->
                            <div class="overlay-comments-list px-3 py-2 flex-grow-1" style="overflow-y:auto;">
                                <div class="comment mb-3">
                                    <span class="fw-bold">takayajeeps</span>
                                    <span>اللہ بہترمخلص</span>
                                    <div class="text-muted small">23h &nbsp; 1 like &nbsp; Reply</div>
                                </div>
                                <div class="comment mb-3">
                                    <span class="fw-bold">syeda_rubina_098</span>
                                    <span>spill way open ho jtty hin agr yhi pani again stor kia jein to nadi nalo m
                                        togani n aein dam bnain jein</span>
                                    <div class="text-muted small">8h &nbsp; 1 like &nbsp; Reply</div>
                                </div>
                                <div class="comment mb-3">
                                    <span class="fw-bold">nabeelernan</span>
                                    <span>🔥🔥</span>
                                    <div class="text-muted small">1d &nbsp; Reply</div>
                                </div>
                                <div class="comment mb-3">
                                    <span class="fw-bold">shahid_bashir_khan1402</span>
                                    <span>When rawal dam was empty why the administration have taken steps to meet these
                                        types of issue? Deep excavation must b carried out to increase the water storage
                                        capacity</span>
                                    <div class="text-muted small">1d &nbsp; 2 likes &nbsp; Reply</div>
                                </div>
                                <div class="comment mb-3">
                                    <span class="fw-bold">_hassaan1_</span>
                                    <span>Thik ha samj gaya</span>
                                    <div class="text-muted small">9h &nbsp; Reply</div>
                                </div>
                                <div class="comment mb-3">
                                    <span class="fw-bold">king.kayanii</span>
                                    <span>Some energy theft mob attacked Islamabad police while on raid.</span>
                                    <div class="text-muted small">2h &nbsp; Reply</div>
                                </div>
                                <!-- More comments ... -->
                            </div>
                            <!-- Add Comment -->
                            <div class="overlay-add-comment px-3 py-2" style="border-top:1px solid #efefef;">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control border-0 p-0" placeholder="Add a comment..."
                                        style="background:transparent;">
                                    <button class="btn btn-link text-secondary px-2"><i
                                            class="bi bi-emoji-smile"></i></button>
                                    <button class="btn btn-link text-secondary px-2"><i
                                            class="bi bi-plus-circle"></i></button>
                                    <button class="btn btn-link text-primary px-2 fw-bold"
                                        style="font-size:1rem;">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script>
    function openOverlay(imgUrl) {
        document.querySelector('.overlay-img').src = imgUrl;
        document.getElementById('postOverlay').style.display = 'flex';
    }

    function closeOverlay() {
        document.getElementById('postOverlay').style.display = 'none';
    }
    // Example: Add this to your comment icon
    // <i class="bi bi-chat" onclick="openOverlay('https://your-image-url.jpg')"></i>
    </script>
</body>

</html>