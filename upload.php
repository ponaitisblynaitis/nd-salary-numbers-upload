<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file));
    $temperatures = explode("\n", $data);
    $min = min($temperatures);
    $max = max($temperatures);
    $sum = array_sum($temperatures);
    $count = count($temperatures);
    $average = $sum / $count;
    echo "Minimum temperature: " . $min . "<br>";
    echo "Maximum temperature: " . $max . "<br>";
    echo "Average temperature: " . $average . "<br>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Temperatura</title>
</head>
<body class="bg-primary-subtle">
<div class="container col-md-4 mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="form-group">
        <input type="file" name="file" class="form-control btn btn-outline-info">
        <input type="submit" name="submit" value="Upload" class="form-control btn btn-info mt-5">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
