<?php
include dirname(__DIR__)."/util/connectDB.php";
class FeedBackDAO{
    
    public static function getAllFeedBack($conn)
    {
        $statement = $conn->prepare("select * from feedback");
        $statement->execute();
        $feedbacks=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $feedbacks;
    }

    public static function getTenKhachHang($makh, $conn)
    {
        $statement=$conn->prepare("select ten from khachhang where makh='$makh'");
        $statement->execute();
        $user=$statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public static function deleteFeedBack($mafb, $conn){
        $statement = $conn->prepare("delete from feedback where mafb=$mafb");
        $statement->execute();        
    }
}

?>