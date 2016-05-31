<?php  
    Ad::deleteAd(Input::get('user_id'), Input::get('id'));
    $item = Ad::find(Input::get('id'));
?>
<div class="container">
    <h3 class="center-align">Are you sure you want to delete this ad?</h3>
    <div class="row">
        <a href=""><button class="btn">Yes</button></a>
        <a href="/ads/show?user_id=<?= $item->user_id?>&id=<?= $item->id?>"><button class="btn">No</button> </a>
        <?php var_dump($item->user_id)?>
        <?php var_dump($item->id)?>
           
    </div>
</div>