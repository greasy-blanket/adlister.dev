

<div class="section">
    <div class="row title center-align">
        <h1>Adlist It!</h1>
    </div>
    <div class="row">
        <form class="col s12" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12">
                      <input placeholder="What are you selling?" name="name" id="name" type="text" class="validate">
                      <label for="name">Name</label>
                </div>
                <div class="input-field col s12">
                      <input placeholder="How much?" id="price" name="price" type="text" class="validate">
                      <label for="price">Price</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                          <textarea id="description" name="description" class="materialize-textarea"></textarea>
                          <label for="description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                          <input id="img" name="img" type="file" class=""></input>
                    </div>
                </div>
            </div>
                <button class="center-btn btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right"></i>
                </button>
        </form>
    </div>
</div>

