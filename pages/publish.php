<div class="well well-sm">
    <div id="panel">
        <form action="" method="POST" enctype="multipart/form-data">
            <p><input class="form form-control" type="text" name="title" id="idTitle" placeholder="Insert a title" required /></p>
            <p><input class="form form-control" type="text" name="authorPost" id="idAuthorPost" placeholder="Insert an author" required /></p>
            <p><textarea rows="4" cols="50" class="form form-control" name="description" id="idDescription" placeholder="Insert a description"></textarea></p>
            <p><input class="form form-control" type="file" name="image" id="idImage" required/></p>
            <p align="right"><input type="submit" value="Publish" class="btn btn-default"></p>
            <input type="hidden" name="send" value="send">
        </form>

        <?php
        if (isset($_POST['send']) && $_POST['send'] == 'send') {
            $titlePost = $_POST['title'];
            $descPost = $_POST['description'];
            $author = $_POST['authorPost'];
            date_default_timezone_set('America/Sao_Paulo');
            $dateDefault = date("d/m/Y");
            $hourDefault = date("H:i");
            $dateOther = date("dmY");
            $hourOther = date("His");

            if (empty($titlePost) || empty($author)) {
                echo "Title and author name are required!";
            } else {
                $uploaddir = 'images/uploads/';
                $uploadfile = $uploaddir . basename(md5($_FILES['image']['name']) . $dateOther . $hourOther . $_FILES['image']['name']);
                $imageName = $uploaddir . basename(md5($_FILES['image']['name']) . $dateOther . $hourOther . $_FILES['image']['name']);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    echo "Image uploaded successfully! ";
                    $query = "INSERT INTO tblPost (titlePost, descPost, imagePost, datePost, hourPost, authorPost) VALUES ('$titlePost', '$descPost', '$imageName', '$dateDefault', '$hourDefault', '$author')";

                    if (mysqli_query($conn, $query)) {
                        echo "Post created successfully!";
                    }
                } else {
                    echo "Error uploading";
                }
            }
        }

        ?>
    </div>
</div>