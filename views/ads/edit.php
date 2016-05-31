<?php
    $id = Input::get('id');
    $ad = Ad::find($id);

?>

<div class="form">
    <div class="title center-align">
      <h1>Edit Your Adlist</h1>
    </div>
    <div class="">
        <form class="" method="POST">
            <div class="">
                <div class="input-field">
                    <input placeholder="What are you selling?" name="name" id="name" type="text" class="validate" value=" <?= $ad->name ?> ">
                    <label for="name">Title</label>
                </div>
                <div class="input-field">
                        <input placeholder= "Seller's Price" name="price" id="price" type="text" class="validate" value=" <?= $ad->price ?> ">
                        <label for="price">Price</label>
                </div>
                <div class="">
                    <div class="input-field">
                        <textarea id="description" name="description" class="materialize-textarea"><?= $ad->description ?></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </div>
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>

            <div>
                <button class="btn" type="submit" name="action">Submit</button>
            </div>
        </form>
    </div>
</div>

