<?php
require_once __DIR__ . '/Model.php';

class Ad extends Model
{
    protected static $table = 'ads';

    public static function findAdsByUserID($user_id)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ads WHERE user_id = :user_id;';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue('user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function findMostRecentAds()
    {
        self::dbConnect();
        
        $query = 'SELECT * FROM ads ORDER BY id DESC LIMIT 3'; 
        $stmt = self::$dbc->prepare($query); 
        $stmt->execute(); 

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function showAd($user_id, $ad_id)
    {
        self::dbConnect();
        $query = 'SELECT ads.name AS ad_name, users.name, ads.id, ads.user_id, ads.description, ads.price, ads.img_url, users.email, users.username, users.password FROM ads JOIN users ON users.id = ads.user_id WHERE users.id = :user_id AND ads.id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue('user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindValue('id', $ad_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
