<!--Page for single advertisement -->
<?php
function pageController()
{
    $item = ['title' => 'Jet', 'owner' => 'Sally', 'description' => 'lorem ipsum delor and other really neat things.', 'email' => 'sally89@gmail.com', 'address' => '1324 S. Lorem, San Antonio, Texas, 77777'];
    return $item;
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <title>Adlister | Item</title>
</head>
<body>
  <?php //require "temp-navbar.php"; ?>
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

    <?php //require 'temp-foot.php'; ?>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>
