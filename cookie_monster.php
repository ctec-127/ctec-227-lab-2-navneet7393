<?php
//Deleting cookies

setcookie("username", "BettyW", time() - 7200); 

setcookie("firstname", "Betty", time() - 7200);

setcookie("lastname", "White", time()- 7200);

setcookie("cookie[institution]","Clark", time() - 7200);
setcookie("cookie[city]","Vancouver", time() - 7200);
setcookie("cookie[state]","WA", time() -7200);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="cookie_eat.php">Cookie Eat</a></p>
    <p><a href="cookie_bake.php">Cookie Bake</a></p>
    <p><a href="cookie_monster.php">Cookie Monster</a></p>

</body>
</html>