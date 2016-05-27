<?php
    $userinfo = Auth::user();
    $ads = Ad::findAdsByUserID($userinfo->id);
?>
<div class="container">
    <div class="user-info section center-align">
        <h2>User Info</h2>

        <div class="info left-align">
            <div class="name">
                <p>Name: <?= $userinfo->name ?></p>
            </div>

            <div class="email">
                <p>Email: <?= $userinfo->email ?></p>
            </div>
        </div>
        <button class="edit-profile btn">Edit Profile</button>
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
        <button class="create-ad btn">Create Ad</button>
    </div><!-- End of user-ads -->
</div><!-- End of container -->

