<?php
   $ads = Ad::findMostRecentAds();
?>
<div class="section">
    <section id="welcome">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align section-title">Welcome To Adlister</h1>
            </div>
            <div class="jumbotron">

            </div>
        </div>
    </section>

    <section id="features">
        <div class="row">
            <h3 class="section-title">Featured Items</h3>
            <?php foreach ($ads as $index => $ad): ?>
            <div class="items col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="<?= $ad['img_url']; ?>">
                        <span class="card-title"><?= $ad['name'] ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $ad['description']; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="/ads/show?user_id=<?= $ad['user_id']?>&id=<?= $ad['id']?>"><button class="btn">Details Page</button></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

