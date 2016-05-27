<div class="container">
    <div>
        <h1 class="center-align"><?= $item['title'];?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m9">
                <img class="responsive-img" src="<?= $item['img']?>" >
                <h3>Item Number: <?= $item['id']?></h3>
                <a href="">Posted by <?= $item['owner'] ?></a>
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
                        <td><?= $item['owner']?><br><?= $item['address']?><br><?= $item['email']?></td>
                    </tr>
                </table>
            </div>
            <div class="col s12 m8">
                <button class="btn"><a href="">Edit Ad</a></button>
                <button class="btn"><a href="">Delete ad</a></button>
            </div>
        </div>
    </div>   
</div>
    

    