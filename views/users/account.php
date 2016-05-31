<?php
    $userinfo = Auth::user();
    $ads = Ad::findAdsByUserID($userinfo->id);
?>
<div class="section">
    <div class="user-info section center-align">
        <h2>User Info</h2>

        <div class="info left-align">
            <div class="name">
                <p>Name: <?= $userinfo->name ?></p>
            </div>

            <div class="username">
                <p>User Name: <?= $userinfo->username ?></p>
            </div>
            <div class="email">
                <p>Email: <?= $userinfo->email ?></p>
            </div>
        </div>
        <a class="edit-profile btn" href="http://adlister.dev/user/edit">Edit Profile</a>
    </div><!-- End of user-info -->

    <div class="user-ads section center-align">
        <h2>Your Ads</h2>

        <div class="info">
            <?php foreach($ads as $ad): ?>

                <div class="ad-title">
                    <p><?= $ad['name'] ?></p>
                </div>

            <?php endforeach; ?>
        </div>
        <a href= "http://adlister.dev/ads/create" class="create-ad btn">Create Ad</a>
        <a href= "????" class="edit-ad btn">Edit Your Ads</a>

    </div><!-- End of user-ads -->
</div><!-- End of container -->

