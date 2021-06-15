<?php
$conn = mysqli_connect("localhost", "root", "", "election");

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $sql1 = "SELECT COUNT(*) AS num FROM `votes` WHERE `participant` = 'a'";
    $result = mysqli_query($conn, $sql1);

    $sql2 = "SELECT COUNT(*) AS num2 FROM `votes` WHERE `participant` = 'b'";
    $result2= mysqli_query($conn, $sql2);

    $sql3 = "SELECT COUNT(*) AS num3 FROM `votes` WHERE `participant` = 'c'";
    $result3 = mysqli_query($conn, $sql3);

    $sql4 = "SELECT COUNT(*) AS num4 FROM `votes` WHERE `participant` = 'd'";
    $result4 = mysqli_query($conn, $sql4);

    while ($row = mysqli_fetch_assoc($result)) {
        $output = $row['num'];
    }
    while ($row = mysqli_fetch_assoc($result2)) {
        $output2 = $row['num2'];
    }
    while ($row = mysqli_fetch_assoc($result3)) {
        $output3 = $row['num3'];
    }
    while ($row = mysqli_fetch_assoc($result4)) {
        $output4 = $row['num4'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.css">

    <style>
        table, tr, td {
            border: 1px solid black;
        }
        table {
            width: 50%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Elections</a>
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
    <br>
    <div class="container">
       
        <table>
            <tr>
                <th>Name</th>
                <th>Votes</th>
            </tr>
            <tr>
                <td>Sam</td>
                <td> <?php echo $output;?></td>
            </tr>
            <tr>
                <td>Daniel</td>
                <td> <?php echo $output2;?></td>
            </tr>
            <tr>
                <td>Sanvi</td>
                <td><?php echo $output3;?></td>
            </tr>
            <tr>
                <td>Sahil</td>
                <td><?php echo $output4;?></td>
            </tr>
        </table>
    </div>
    <script src="app.js"></script>
</body>

</html>