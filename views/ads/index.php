<?php
    $ads = Ad::all();
?>

<div class="">
    <div>
        <h1 class="center-align">Items Page</h1>
    </div>

    <section id="items">
        <?php foreach ($ads->attributes as $index => $ad): ?>
            <?php if ($index % 4 == 0): ?>
                <div class="row">
            <?php endif ?>
                <div class="col s12 m3">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="<?= $ad['img_url']; ?>" >
                            <span class="card-title">Item <?= $ad['name'] ?></span>
                        </div>
                        <div class="card-content">
                            <p><?= $ad['description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="/ads/show?user_id=<?= $ad['user_id']?>&id=<?= $ad['id']?>"><button class="btn">Details</button></a>
                        </div>
                    </div>
                </div>
            <?php if ($index % 4 == 3): ?>
                </div>
            <?php endif ?>
        <?php endforeach; ?>
    </section>
</div>
