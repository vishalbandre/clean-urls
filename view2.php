<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Clean URLs</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h2>View Clean URLs</h2>
    <h4>
        <?php
        echo $_GET['id'] . '<br />';
        echo $_GET['title'];
        ?>
    </h4>
    <a href="/view.php?id=1">Refresh</a> &nbsp;
    <a href="/index.php">Back to Home</a>
</body>

</html>