<?php
    $id = Input::get('id');
    $ad = Ad::find($id);

?>

<div class="container">
    <div class="row title center-align">
      <h1>Edit Your Adlist</h1>
    </div>
    <div class="row">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="What are you selling?" name="name" id="name" type="text" class="validate" value=" <?= $ad->name ?> ">
                    <label for="name">Title</label>
                </div>
                <div class="input-field col s12">
                        <input placeholder= "Seller's Price" name="price" id="price" type="text" class="validate" value=" <?= $ad->price ?> ">
                        <label for="price">Price</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="description" name="description" class="materialize-textarea"><?= $ad->description ?></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                      <input id="img" name="img" type="file" class=""></input>
                </div>
            </div>
            <button class="center-btn btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right"></i>
            </button>
        </form>
    </div>
</div>

