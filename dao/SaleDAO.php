<?php
include dirname(__DIR__) . "/util/connectDB.php";
class SaleDAO
{
    public static function findSale( $makm, $conn)
    {
        $statement = $conn->prepare("select * from dotkhuyenmai where makm = $makm");
        $statement->execute();
        $dotkhuyenmai = $statement->fetch(PDO::FETCH_ASSOC);
        return $dotkhuyenmai;
    }
}
