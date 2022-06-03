<div class="well well-sm">
    <?php

    if (isset($_GET['posts'])) {
        $pg = (int) $_GET['posts'];
    } else {
        $pg = 1;
    }

    $max = 2;
    $home = ($pg * $max) - $max;

    $select = $mysqli->query("SELECT * FROM tblPost ORDER BY idPost DESC LIMIT $home, $max");
    $count = mysqli_num_rows($select);

    if ($count <= 0) {
        echo "<code>No posts registered in the database!";
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
                $countLikes = $countLikes . " liked";
            } else if ($countLikes > 1) {
                $countLikes = $countLikes . " liked";
            }

            $selectComments = mysqli_query($conn, "SELECT * FROM tblCommentary WHERE idPost = '$idPost'");
            $countComments = mysqli_num_rows($selectComments);

            if ($countComments == 1) {
                $countComments = $countComments . " commented";
            } else if ($countComments > 1) {
                $countComments = $countComments . " commented";
            }


    ?>

            <div id="panel" align="left">
                <p><a href="?page=post&idPost=<?php echo $idPost ?>" class="title"><?php echo $titlePost; ?></a></p>
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

<nav id="navFooterHome">
    <ul class="pagination">
        <?php
        $select = mysqli_query($conn, "SELECT * FROM tblPost");
        $totalPosts = mysqli_num_rows($select);

        $pages = ceil($totalPosts / $max);

        $links = 2;

        echo '<li><a class="btn btn-light" href="?page=home&posts=1" aria-label="Home Page"> <i class="fas fa-solid fa-chevron-left"></i></a></li>';

        for ($i = $pg - $links; $i <= $pg - 1; $i++) {
            if ($i <= 0) {
            } else {
                echo '<li><a class="btn btn-light" href="?page=home&posts=' . $i . '">' . $i . '</a></li>';
            }
        }

        echo '<li><a class="btn btn-light" href="?page=home&posts=' . $pg . '">' . $pg . '</a></li>';

        for ($i = $pg + 1; $i <= $pg + $links; $i++) {
            if ($i > $pages) {
            } else {
                echo '<li><a class="btn btn-light" href="?page=home&posts=' . $i . '">' . $i . '</a></li>';
            }
        }

        echo '<li><a class="btn btn-light" href="?page=home&posts=' . $pages . '" aria-label="Last Page"><i class="fas fa-solid fa-chevron-right"></i></a></li>';
        ?>
    </ul>
</nav>