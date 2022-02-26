<?php 
$firstName = "Gipson"

$Lastname  = "suu"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML, CSS, PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nama Depan">
    <?php echo $firstName; ?>
    </div>
    <div class="nama Blakang">

    <?php echo $Lastname; ?>
    </div>

</body>
</html>