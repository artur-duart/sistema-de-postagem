<?php
include_once("settings/settings.php");
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <title>Sistema de Paginação</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="body">
        <center>
            <?php
            if (isset($_GET['page'])) {
                $of = ($_GET['page']);
            } else {
                $of = "home";
            }

            if (file_exists("pages/" . $of . ".php")) {
                include("pages/" . $of . ".php");
            } else {
                print "Error 404. Page not found.";
            }
            ?>
        </center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a757f2d5f7.js" crossorigin="anonymous"></script>
</body>

</html>





