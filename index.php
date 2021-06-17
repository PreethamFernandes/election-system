<?php
    $conn = mysqli_connect("localhost", "root", "", "election");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['participant'];

        $sql = "INSERT INTO `votes` ( `participant`) VALUES ( '$name');";
        $result = mysqli_query($conn, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.css">
    <style>
        input {
            padding: 15px 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Elections</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="result.php">Results</a>
                    </li>
            </div>
        </div>
    </nav>
    <form action="index.php" method="POST">
        <div id="item">
            <h1 name="name">Sam</h1>
            <img src="image.jpg" width="100" alt="">
            <input name="participant" type="radio" value="a">
        </div>
        <div id="item">
            <h1 name="name">Daniel</h1>
            <img src="image.jpg" width="100" alt="">
            <input name="participant" type="radio" value="b">
        </div>
        <div id="item">
            <h1 name="name">Sanvi</h1>
            <img src="image.jpg" width="100" alt="">
            <input name="participant" type="radio" value="c">
        </div>
        <div id="item">
            <h1 name="name">Sahil</h1>
            <img src="image.jpg" width="100" alt="">
            <input name="participant" type="radio" value="d">
        </div>

        <input type="submit" class="btn btn-success">
    </form>
    <script src="app.js"></script>
</body>

</html>