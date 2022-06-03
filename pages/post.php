<div class="well well-sm">
    <?php

    $idPost = $_GET['idPost'];
    $select = mysqli_query($conn, "SELECT * FROM tblPost WHERE idPost = '$idPost'");
    $count = mysqli_num_rows($select);

    if ($count <= 0) {
        echo "Post not found";
    } else {
        while ($row = mysqli_fetch_array($select)) {
            $idPost = $row['idPost'];
            $titlePost = $row['titlePost'];
            $descPost = $row['descPost'];
            $imagePost = $row['imagePost'];
            $datePost = $row['datePost'];
            $hourPost = $row['hourPost'];
            $authorPost = $row['authorPost'];
            $sql = "SELECT * FROM tblUser WHERE username = '$authorPost'";
            $query = mysqli_query($conn, $sql);
            $line = mysqli_fetch_assoc($query);

            $selectLike = mysqli_query($conn, "SELECT * FROM tblLike WHERE idPost = '$idPost'");
            $countLikes = mysqli_num_rows($selectLike);

            if ($countLikes == 1) {
                $countLikes = $countLikes. " liked";
            } else if ($countLikes > 1) {
                $countLikes = $countLikes. " liked";
            }

            $selectComments = mysqli_query($conn, "SELECT * FROM tblCommentary WHERE idPost = '$idPost'");
            $countComments = mysqli_num_rows($selectComments);

            if ($countComments == 1) {
                $countComments = $countComments. " commented";
            } else if ($countComments > 1) {
                $countComments = $countComments. " commented";
            }
    ?>

            <div id="panel" align="left">
                <p><a href="" class="title"><?php echo $titlePost; ?></a></p>
                <?php if ($descPost != null) { ?> <p class="desc"><?php echo $descPost ?></p><?php } ?>
                <?php if ($imagePost != null) { ?> <p><img src="<?php echo $imagePost ?>" class="image"></p><?php } ?>
                <p><i class="fas fa-solid fa-clock"></i> Postado em: <?php echo $datePost . " às " . $hourPost ?> </br>
                    <i class="fas fa-solid fa-user"></i> Postado por: <?php echo $line['nameUser'] ?>
                </p>
                <p><code><span><i class="fas fa-solid fa-thumbs-up"></i> <?php echo $countLikes ?></span> - <span><i class="fas fa-solid fa-comment"></i> <?php echo $countComments ?></span></code></p>
                <p><a href="?page=like&idPost=<?php echo $idPost ?>" class="btn btn-default"><i class="fas fa-solid fa-thumbs-up"></i> Like</a></p>
                <p><a href="?page=post&idPost=<?php echo $idPost ?>" class="btn btn-default"><i class="fas fa-solid fa-comment"></i> Comment</a></p>
            </div>

    <?php
        }
    }
    ?>

</div>

<div id="panel" align="left">
    <form action="" method="POST" enctype="multipart/form-dara">
        <p>
            <label for="name">Name</label></br>
            <input type="text" name="nameAuthor" id="nameAuthor" placeholder="Your name" required class="form form-control">
        </p>
        <p><textarea name="commentArea" id="commentArea" placeholder="Insert your comment" required class="form form-control"></textarea></p>
        <p align="right"><input type="submit" value="Submit comment" class="btn btn-success" /></p>
        <input type="hidden" name="comment" value="comment">
    </form>
    <?php
    if (isset($_POST['comment']) && $_POST['comment'] == 'comment') {
        $name = $_POST['nameAuthor'];
        $commentary = $_POST['commentArea'];
        date_default_timezone_set('America/Sao_Paulo');
        $dateDefault = date("d/m/Y");
        $hourDefault = date("H:i");

        if (empty($name) || empty($commentary)) {
            echo "Author name and commentary are required!";
        } else {
            $commentPost = "INSERT INTO tblCommentary (idPost, author, commentary, dateCommentary, hourCommentary) VALUES ('$idPost', '$name', '$commentary', '$dateDefault', '$hourDefault')";

            if (mysqli_query($conn, $commentPost)) {
                echo "Commented with Successful!";
            }
        }
    }
    ?>

    <hr>
    <?php
    $select = mysqli_query($conn, "SELECT * FROM tblCommentary WHERE idPost = '$idPost'");
    $count = mysqli_num_rows($select);

    if ($count <= 0) {
        echo "This post has no comments.";
    } else {
        while ($row = mysqli_fetch_array($select)) {
            $name = $row['author'];
            $comment = $row['commentary'];
            $date = $row['dateCommentary'];
            $hour = $row['hourCommentary'];

    ?>

            <div id="comments" class="well well-sm">
                <p><img src="images/uploads/fotopadrao.svg" class="image-comment"/><strong><?php echo $name ?></strong></p>
                <p class="list-group-item"><?php echo $comment ?></strong></p> </br>
                <p><i class="fas fa-solid fa-clock"></i> Postado em: <?php echo $date . " às " . $hour ?></p>
            </div>

    <?php
        }
    }
    ?>
</div>