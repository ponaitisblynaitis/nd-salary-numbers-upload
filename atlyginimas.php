<?php

if (isset($_POST['startingSalary']) && isset($_POST['increasePerMonth'])) {
    $startingSalary = $_POST['startingSalary'];
    $increasePerMonth = $_POST['increasePerMonth'];

    $months = 0;
    $currentSalary = $startingSalary;

    while ($currentSalary < $startingSalary * 2) {
        $months++;
        $currentSalary += $increasePerMonth;
        if($months > 1000) break;
    }


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
    <title>Salary</title>
</head>
<body class="bg-primary-subtle">

<div class="container col-md-4 mt-5">
    <form method="post" class="form-group">
        <label for="startingSalary">Starting Salary:</label>
        <input type="text" name="startingSalary" id="startingSalary" class="form-control" required>
        <br>
        <label for="increasePerMonth">Increase per Month:</label>
        <input type="text" name="increasePerMonth" id="increasePerMonth" class="form-control " required>
        <br>
        <button class="btn btn-info">Calculate!</button>
        <br>
        <br>
        <?="It will take " . $months . " months."?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>