<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="form.php" method="GET">
     Name <input type="text" name="name">
     <input type="submit">
</form>

<?php
$name = $_GET["name"];
echo "Hej " . $name . " jeg håber du kan lære PHP";
?>
</body>
</html>