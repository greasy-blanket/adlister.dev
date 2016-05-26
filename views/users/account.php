<!--Page for user account home-->
<?php

function pageController()
{
    $data = [];
    $ads = [];

    $data['name'] = 'Jane';
    $data['email'] = 'jane1981@hotmail.com';

    $ads = ['Sony Playstation', 'Cat With Laser Eyes', 'Charlie Brown Shirt'];

    return [
        'data' => $data,
        'ads'  => $ads,
        ];
}
extract(pageController());

?>
<html>
<head>
  <title>account</title>
  <?php //require 'header.php'; ?>

</head>
<body>
    <?php //require 'nav-bar'; ?>
    <div class="container">
        <div class="user-info section center-align">
            <h2>User Info</h2>

            <div class="info left-align">
                <div class="name">
                    <p>Name: <?= $userinfo['name'] ?></p>
                </div>

                <div class="email">
                    <p>Email: <?= $userinfo['email'] ?></p>
                </div>
            </div>
            <button class="edit-profile btn">Edit Profile</button>
        </div><!-- End of user-info -->

        <div class="user-ads section center-align">
            <h2>Your Ads</h2>

            <div class="info">
                <?php foreach($ads as $adTitle): ?>

                    <div class="ad-title">
                        <p><?= $adTitle ?></p>
                    </div>

                <?php endforeach; ?>

            </div>
            <button class="create-ad btn">Create Ad</button>
        </div><!-- End of user-ads -->
    </div><!-- End of container -->

    <?php //require 'footer.php'; ?>

    <?php //require 'js-files'; ?>
</body>
</html>
