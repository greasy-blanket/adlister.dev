<?php
    $item = Ad::showAd(Input::get('user_id'), Input::get('id'));

?>
<div class="">
    <div>
        <h1 class="center-align"><?= $item['ad_name'];?></h1>
    </div>
    <div class="">
        <div class="row">
            <div class="col s12 m8">
                <img class="responsive-img" src="<?= $item['img_url']?>" >
                <h3>Item Number: <?= $item['id']?></h3>
                <a href="">Posted by <?= $item['name'] ?></a>
                <p class="flow-text"><?= $item['description'] ?></p>
            </div>

            <div class="col s12 m3">
                <table>
                    <tr>
                        <th>Price</th>
                        <th>Seller</th>
                    </tr>
                    <tr>
                        <td><?= $item['price']?></td>
                        <td><?= $item['name']?><br><?= $item['email']?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>



