<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="#">
    <label enter name>
        <input type="text" required name="name">
        <button>submit</button>


</form>
</body>
</html>

<?php

$name=htmlspecialchars($_POST['name']);
echo $name;
?>