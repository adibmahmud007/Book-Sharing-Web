<?php
    $server='sql313.infinityfree.com';
    $username='if0_37723147';
    $password='pWKtbDS4bL';
    $db_name='if0_37723147_book_sharing_web';

    $conn= mysqli_connect($server,$username,$password,$db_name);

    if($conn){
        echo "Database connected Successfully";
    }
    else{
        die (mysqli_connect($conn));
    }

?>