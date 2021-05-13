<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./lecturaApi.php" method="POST">
        <input type="submit" value="api post">
    </form>
    <br>
    <a href="./lecturaApi.php">api get</a>
    <?
       echo "Today is " . date("Y/m/d") . "<br>";
       echo "Today is " . date("Y.m.d") . "<br>";
       echo "Today is " . date("Y-m-d") . "<br>";
       echo "Today is " . date("l");
    ?>
</body>
</html>