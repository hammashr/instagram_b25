<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap_css.php"); ?>
    <title>Instagram Message Section</title>
    <style>
    .insta-message-bar {
        position: fixed;
        right: 32px;
        bottom: 32px;
        background: #262626;
        color: #fff;
        border-radius: 2rem;
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.18);
        display: flex;
        align-items: center;
        padding: 8px 20px 8px 16px;
        z-index: 1050;
        min-width: 170px;
        font-size: 16px;
        transition: box-shadow 0.2s;
    }

    .insta-message-bar .bi-send {
        font-size: 1.5rem;
        margin-right: 10px;
        position: relative;
    }

    .msg-icon-wrap {
        display: inline-block;
        position: relative;
    }

    .msg-count {
        background: #ed4956;
        color: #fff;
        font-size: 10px;
        border-radius: 50%;
        padding: 0 6px;
        font-weight: bold;
        border: 2px solid #262626;
        min-width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        /* Move badge above the send icon */
        left: 12px;
        /* Adjust horizontally to the send icon's top corner */
        z-index: 2;
    }

    .insta-message-bar .msg-users {
        display: flex;
        align-items: center;
        margin-left: 12px;
    }

    .insta-message-bar .msg-users img {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 2px solid #fff;
        margin-left: -10px;
        box-shadow: 0 0 0 2px #262626;
        background: #fff;
    }

    .more-users {
        color: #fff;
        font-size: 22px;
        font-weight: bold;
        margin-left: 2px;
        margin-right: 2px;
    }

    @media (max-width: 1270px) {
        .insta-message-bar {
            display: none !important;
        }
    }

    @media (max-width: 991.98px) {
        .insta-message-bar {
            right: 10px;
            bottom: 10px;
            min-width: 120px;
            padding: 6px 10px 6px 10px;
            font-size: 14px;
        }

        .insta-message-bar .msg-users img {
            width: 22px;
            height: 22px;
        }
    }
    </style>
</head>

<body>
    <div class="insta-message-bar shadow">
        <span class="msg-icon-wrap">
            <i class="bi bi-send"></i>
            <span class="msg-count">7</span>
        </span>
        <span class="fw-bold ms-2">Messages</span>
        <div class="msg-users ms-3">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="user1">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="user2">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="user3">
            <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="user4">
            <span class="more-users ms-1">...</span>
        </div>
    </div>

</body>

</html>