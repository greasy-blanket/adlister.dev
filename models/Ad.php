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

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function findMostRecentAds()
    {
        self::dbConnect();
        
        $query = 'SELECT * FROM ads ORDER BY id DESC LIMIT 3'; 
        $stmt = self::$dbc->prepare($query); 
        $stmt->execute(); 

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        return $results;
    }
}
