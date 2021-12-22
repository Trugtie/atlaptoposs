<?php

    require "connectDB.php";


    $statement = $pdo->prepare("update khachhang set ho=:ho, ten=:ten, sdt=:sdt, diachi=:diachi 
where makh=(select makh from khachhang where username ='$username')");
    $statement->bindValue(':ho', $ho);
    $statement->bindValue(':ten', $ten);
    $statement->bindValue(':sdt', ($sdt));
    $statement->bindValue(':diachi', ($diachi));
    $statement->execute();

    header('Location: ../view/accountinformation.php');

