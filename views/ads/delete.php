<?php  
    $item = Ad::find(Input::get('id'));

    if (Input::has('delete')) {
        Ad::deleteAd(Input::get('user_id'), Input::get('id'));
    }
?>
<div class="container">
    <h3 class="center-align">Are you sure you want to delete this ad?</h3>
    <div class="row">
        <form method="POST" id="delete-form" data-id="<?=$item->id?>">
            <input type="hidden" name="delete" id="delete-input">
            <button class="btn delete">Yes</button>   

        </form>
        <a href="/ads/show?user_id=<?= $item->user_id?>&id=<?= $item->id?>"><button class="btn">No</button> </a>
        <?php var_dump($item->user_id)?>
        <?php var_dump($item->id)?>
           
    </div>
</div>


<script>
    $('#delete').click(function (){
        var id = $(this).data('id');

        $('#delete-input').val(id);

        $('#delete-form').submit();
    })        
</script>