<?php 
    $idPost = $_GET['idPost'];

    $add = "INSERT INTO tblLike (idPost) VALUES ('$idPost')";

    if(mysqli_query($conn, $add)){
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error to Like";
    }
?>